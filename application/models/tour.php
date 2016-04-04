<?php

class Tour extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function save($data)
    {
        $this->db->set($data);
        if (!$this->db->insert('tour')) return false;
        return $this->db->insert_id();
    }

    public function update($id, $data)
    {
        $this->db->where('id', $id);
        if (!$this->db->update('tour', $data)) return false;
        return true;
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        if (!$this->db->delete('tour')) return false;
        return true;
    }

    public function getTours($limit, $start)
    {
        $this->db->order_by('ISNULL(ordering), ordering asc');
        $this->db->limit($limit, $start);
        $query = $this->db->get("tour");

        return $query->result();
    }

    public function record_count()
    {
        return $this->db->count_all("tour");
    }

    public function getTourByID($id)
    {

        $this->db->select('*');
        $this->db->where('id', $id);
        $query = $this->db->get('tour');


        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }
        return false;
    }

    public function getTourMetaByID($id)
    {

        $this->db->select('id, meta_description, meta_title, meta_keyword, url');
        $this->db->where('id', $id);
        $query = $this->db->get('tour');


        if ($query->num_rows > 0) {
            // person has account with us
            return $query->row();
        }
        return false;
    }

    public function updateMeta($id, $data)
    {
        $this->db->where('id', $id);
        if (!$this->db->update('tour', $data)) return false;
        return true;
    }

    public function getToursByDestination($id)
    {

        $this->db->select('tour.*');
        $this->db->join('tour_destination', 'tour.id=tour_destination.tour_id');
        $this->db->where('tour_destination.region_id', $id);
        $this->db->where('tour.active', 1);
        $this->db->order_by('tour.name');
        $query = $this->db->get('tour');
        return $query->result_array();
    }

    public function getDestinationByTour($id)
    {
        $this->db->select('tour_destination.*, region.name as name, region.image as image, region.description');
        $this->db->join('region', 'region.id=tour_destination.region_id');
        $this->db->where('tour_destination.tour_id', $id);
        $this->db->group_by('tour_destination.region_id');
        $this->db->order_by('ISNULL(region.ordering), region.ordering', 'region.highlight DESC', 'region.name');
        $this->db->limit(1);
        $query = $this->db->get('tour_destination');

        return $query->row();
    }

    public function getToursByCategory($id)
    {

        $this->db->select('tour.*');
        $this->db->join('tour_category', 'tour.id=tour_category.tour_id');
        $this->db->where('tour_category.category_id', $id);
        $this->db->where('tour.active', 1);
        $this->db->order_by('tour.name');
        $query = $this->db->get('tour');
        return $query->result_array();
    }

    public function getToursBestValue()
    {

        $this->db->select('*');
        $this->db->where('promo_option = 1 and active = 1');
        $this->db->order_by('tour.name');
        $query = $this->db->get('tour');
        return $query->result_array();
    }

    public function getToursPromo()
    {
        $this->db->select('*');
        $this->db->where('promo_option != 0 and active = 1');
        $this->db->order_by('tour.name');
        $query = $this->db->get('tour');

        return $query->result_array();
    }

    public function getAllTours()
    {

        $this->db->select('*');
        $this->db->where('active = 1');
        $this->db->order_by('ISNULL(tour.ordering), tour.ordering', 'tour.name');
        $query = $this->db->get('tour');
        return $query->result_array();
    }

    public function getToursDuration()
    {

        $this->db->select('DISTINCT(num_days)');
        $this->db->where('active = 1');
        $this->db->order_by('num_days');
        $result = $this->db->get('tour');
        $return = array();
        $return[''] = 'DURATION OF STAY';
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['num_days']] = $row['num_days'] . ' DAYS';
            }
        }
        return $return;
    }

    public function search($data)
    {
        $this->db->select('tour.*');

        if ($data["destination"] != '') {
            $this->db->join('tour_destination', 'tour.id=tour_destination.tour_id');
            $this->db->where('tour_destination.region_id', $data['destination']);
        }

        if ($data["category"] != '') {
            $this->db->join('tour_category', 'tour.id=tour_category.tour_id');
            $this->db->where('tour_category.category_id', $data['category']);
        }


        if ($data["duration"] != '') {
            $this->db->where('tour.num_days', $data['duration']);
        }

        $this->db->where('active = 1');
        $this->db->order_by('tour.name');
        $query = $this->db->get('tour');
        return $query->result_array();
    }


    public function ordering($id, $order)
    {
        $this->db->where('id', $id);
        if (!$this->db->update('tour', array('ordering' => $order))) return false;
        return true;
    }

    //////////////////////////////////////////////////////

    /*------- TOUR ACTIVITY -----------*/

    public function saveTourActivities($activities, $tour)
    {
        foreach ($activities as $activity) {
            $data = array(
                'tour_id' => $tour,
                'tour_activity' => $activity
            );
            $this->db->set($data);
            $this->db->insert('tour_activity');
        }

    }

    public function getTourActivities($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_activity');
        return $query->result_array();
    }


    public function deleteTourActivities($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_activity')) return false;
        return true;
    }

    /*------------ TOUR CATEGORY ----------*/

    public function saveTourCategories($categories, $tour)
    {
        foreach ($categories as $category) {
            $data = array(
                'tour_id' => $tour,
                'category_id' => $category
            );
            $this->db->set($data);
            $this->db->insert('tour_category');
        }

    }

    public function getTourCategories($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_category');
        return $query->result_array();
    }

    public function deleteTourCategories($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_category')) return false;
        return true;
    }

    public function getCategories()
    {
        $this->db->select('tour_category.*, category.name as name, category.image as image');
        $this->db->join('category', 'category.id=tour_category.category_id');
        $this->db->group_by('tour_category.category_id');
        $this->db->order_by('ISNULL(category.ordering), category.ordering', 'category.highlight DESC, category.name');
        $query = $this->db->get('tour_category');
        return $query->result_array();
    }

    public function getCategoriesList()
    {
        $this->db->select('tour_category.*, category.name as name, category.image as image');
        $this->db->join('category', 'category.id=tour_category.category_id');
        $this->db->group_by('tour_category.category_id');
        $this->db->order_by('ISNULL(category.ordering), category.ordering', 'category.highlight DESC, category.name');
        $result = $this->db->get('tour_category');
        $return = array();
        $return[''] = 'HOLIDAY TYPES';
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['category_id']] = $row['name'];
            }
        }
        return $return;
    }


    /*------------------ TOUR LANGUAGE -------------------*/

    public function saveTourLanguages($languages, $tour)
    {
        foreach ($languages as $language) {
            $data = array(
                'tour_id' => $tour,
                'language_id' => $language
            );
            $this->db->set($data);
            $this->db->insert('tour_language');
        }

    }

    public function getTourLanguages($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_language');
        return $query->result_array();
    }

    public function deleteTourLanguages($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_language')) return false;
        return true;
    }

    /*--------- TOUR DESTINATIONS --------------*/

    public function saveTourDestination($destinaiton)
    {
        $this->db->set($destinaiton);
        $this->db->insert('tour_destination');

    }

    public function getTourDestinations($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_destination');
        return $query->result_array();
    }

    public function deleteTourDestinations($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_destination')) return false;
        return true;
    }

    public function getDestinations()
    {
        $this->db->select('tour_destination.*, region.name as name, region.image as image, region.description
            ');
        $this->db->join('region', 'region.id=tour_destination.region_id');
        $this->db->group_by('tour_destination.region_id');
        $this->db->order_by('ISNULL(region.ordering), region.ordering', 'region.highlight DESC', 'region.name');
        $query = $this->db->get('tour_destination');
        return $query->result_array();
    }

    public function getDestinationsList()
    {
        $this->db->select('tour_destination.*, region.name as name, region.image as image, region.description');
        $this->db->join('region', 'region.id=tour_destination.region_id');
        $this->db->group_by('tour_destination.region_id');
        $this->db->order_by('ISNULL(region.ordering), region.ordering', 'region.highlight DESC', 'region.name');
        $result = $this->db->get('tour_destination');
        $return = array();
        $return[''] = 'DESTINATIONS';
        if ($result->num_rows() > 0) {
            foreach ($result->result_array() as $row) {
                $return[$row['region_id']] = $row['name'];
            }
        }
        return $return;
    }

    /*---------- TOUR TRANSPORT --------------*/

    public function saveTourTransports($transports, $tour)
    {
        foreach ($transports as $transport) {
            $data = array(
                'tour_id' => $tour,
                'transport_id' => $transport
            );
            $this->db->set($data);
            $this->db->insert('tour_transport');
        }

    }

    public function getTourTransports($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_transport');
        return $query->result_array();
    }

    public function deleteTourTransports($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_transport')) return false;
        return true;
    }

    /*----------- ITINERARY ----------------------*/

    public function saveItineraries($itineraries)
    {

        $this->db->set($itineraries);
        $this->db->insert('itinerary');

    }

    public function getItineraries($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $this->db->order_by('id');
        $query = $this->db->get('itinerary');
        return $query->result_array();
    }

    public function deleteItineraries($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('itinerary')) return false;
        return true;
    }

    /*-------------------- TOUR GALLERY -----------------------*/

    public function saveGallery($gallery)
    {

        $this->db->set($gallery);
        $this->db->insert('tour_gallery');

    }

    public function getGallery($tour)
    {
        $this->db->select('*');
        $this->db->where('tour_id', $tour);
        $query = $this->db->get('tour_gallery');
        return $query->result_array();
    }

    public function deleteGallery($tour)
    {
        $this->db->where('tour_id', $tour);
        if (!$this->db->delete('tour_gallery')) return false;
        return true;
    }

}

?>