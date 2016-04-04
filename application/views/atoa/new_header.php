<script src="<?php echo base_url('public/js/bootstrap.min.js') ?>"></script>
<script>
    callCSS('new_header', "<?php echo base_url('public/css/new_header.css')?>");
</script>

<nav class="navbar navbar-default navbar-fixed-top" id="top-header">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <a href="<?php echo site_url(); ?>" id="brand-mobile">TRAVEL ASIA A LA CARTE</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <div class="brand">
            <span>Travel Asia</span>
            <a href="/">
                <svg id="H_logo" viewBox="0 0 1017 1024">
                    <path fill="#004b8d" class="path1 path_background" d="M1006.539 510.685c0 275.82-223.596 499.416-499.416 499.416s-499.416-223.596-499.416-499.416c0-275.82 223.596-499.416 499.416-499.416s499.416 223.596 499.416 499.416z"></path>
                    <path fill="#f3f1da" class="path2 path_element" d="M134.449 397.598v145.308h-20.675v-145.308h-59.781v-17.010h139.709v17.010h-59.252z"></path>
                    <path fill="#f3f1da" class="path3 path_element" d="M212.11 542.906v-162.318h87.319c19.695 0 33.602 3.459 41.657 10.345 8.055 6.902 12.083 18.866 12.083 35.916 0 14.973-2.203 25.421-6.578 31.328-4.407 5.899-12.778 9.721-25.113 11.467v0.363c19.411 1.271 29.133 11.727 29.133 31.399v41.492h-20.706v-37.346c0-18.937-9.248-28.422-27.79-28.422h-69.305v65.76h-20.698zM232.808 461.691h59.781c15.731 0 26.495-2.124 32.22-6.365s8.624-12.233 8.624-23.96c0-14.665-2.14-24.221-6.389-28.659-4.28-4.438-13.37-6.657-27.34-6.657h-66.897v65.641z"></path>
                    <path fill="#f3f1da" class="path4 path_element" d="M496.241 508.537h-92.831l-14.096 34.368h-21.899l67.142-162.318h29.046l68.5 162.318h-21.622l-14.239-34.368zM490.2 494.741l-40.718-99.172-40.149 99.172h80.867z"></path>
                    <path fill="#f3f1da" class="path5 path_element" d="M669.931 380.587h22.183l-64.883 162.318h-29.575l-65.546-162.318h22.025l48.891 122.595 4.841 12.493c1.801 4.825 3.269 8.995 4.438 12.462h0.529c2.677-8 5.694-16.237 9.003-24.718l48.094-122.832z"></path>
                    <path fill="#f3f1da" class="path6 path_element" d="M721.531 396.050v55.288h93.107v15.463h-93.107v60.65h97.135v15.447h-117.833v-162.31h117.833v15.463h-97.135z"></path>
                    <path fill="#f3f1da" class="path7 path_element" d="M865.954 380.587v145.308h94.3v17.003h-114.998v-162.31h20.698z"></path>
                    <path fill="#f3f1da" class="path8 path_element" d="M364.935 695.66h-92.823l-14.128 34.368h-21.899l67.173-162.318h29.046l68.5 162.318h-21.646l-14.223-34.368zM358.894 681.864l-40.718-99.157-40.149 99.165h80.867z"></path>
                    <path fill="#f3f1da" class="path9 path_element" d="M545.354 611.713h-20.572c0-13.086-2.456-21.393-7.368-24.916-4.936-3.522-16.521-5.291-34.803-5.291-21.678 0-35.648 1.682-41.91 5.054-6.262 3.388-9.406 10.874-9.406 22.538 0 13.078 2.456 21.038 7.4 23.881 4.912 2.859 19.538 4.809 43.924 5.836 28.572 1.121 46.727 4.328 54.467 9.627 7.739 5.323 11.617 17.2 11.617 35.671 0 19.98-4.438 32.915-13.338 38.767-8.908 5.883-28.603 8.805-59.063 8.805-26.432 0-43.987-2.961-52.706-8.869-8.742-5.891-13.125-17.816-13.125-35.711l-0.126-7.273h20.548v4.059c0 14.507 2.519 23.51 7.518 27.048 5.038 3.522 17.871 5.307 38.578 5.307 23.723 0 38.325-1.785 43.798-5.307 5.441-3.538 8.181-12.951 8.181-28.24 0-9.911-1.856-16.521-5.575-19.79-3.712-3.301-11.482-5.252-23.312-5.883l-21.488-0.956-20.422-0.963c-31.091-1.887-46.633-16.173-46.633-42.795 0-18.464 4.533-30.799 13.591-36.99 9.034-6.176 27.064-9.279 54.119-9.279 27.411 0 45.274 2.875 53.614 8.639 8.316 5.725 12.493 18.092 12.493 37.030z"></path>
                    <path fill="#f3f1da" class="path10 path_element" d="M594.261 567.71v162.318h-20.706v-162.318h20.706z"></path>
                    <path fill="#f3f1da" class="path11 path_element" d="M742.301 695.66h-92.823l-14.128 34.368h-21.899l67.181-162.318h29.014l68.531 162.318h-21.646l-14.231-34.368zM736.259 681.864l-40.718-99.165-40.149 99.165h80.867z"></path>
                    <path fill="#fff" class="path12 path_sub_element" d="M267.469 830.536c1.477 1.271 1.895 3.822 1.903 5.275 0 0.9 0.663 1.761 1.437 1.919 1.169 0.245 2.251 0.695 2.882 2.014 1.327 2.764 0.276 3.269-0.979 3.664-10.322 3.254-18.756 7.329-23.865 13.338-4.035 4.754-6.207 8.971-1.903 12.509 4.486 3.704 10.788 3.996 15.534 3.656 2.938-0.205 4.565 1.232 4.004 2.345-0.505 1.003-1.895 2.417-5.67 3.025-6.381 1.035-16.6-1.88-21.607-6.081-3.862-3.238-6.286-11.135-3.151-15.944 1.603-2.456 4.13-5.567 5.149-6.713 0.553-0.624 0.355-1.185-1.169-1.248-3.799-0.158-18.614-1.99-25.050-3.87-5.781-1.698-9.666-3.885-11.98-6.326-1.39-1.469-5.173-8.008-1.382-11.451 1.745-1.587 6.12-3.325 16.671-4.233 8.924-0.774 22.531-0.355 33.484 1.88 9.295 1.895 13.931 4.738 15.549 6.128 0.055 0.063 0.079 0.071 0.142 0.111zM257.81 832.415c-1.785-1.579-6.634-2.693-13.615-3.254-12.367-1.003-23.226 1.485-28.24 3.238-2.709 0.948-3.585 2.898-1.611 4.912 1.224 1.248 4.525 2.614 9.184 3.696 4.17 0.963 11.806 1.643 20.185 1.651 3.309 0 10.614-1.524 11.727-1.808 1.414-0.347 3.38-1.706 3.925-3.009 0.442-1.058 0.498-3.625-1.406-5.315-0.055-0.047-0.087-0.055-0.15-0.111z"></path>
                    <path fill="#fff" class="path13 path_sub_element" d="M321.722 916.504c1.343-2.582 10.969-12.47 30.594-26.629 22.744-16.41 31.383-23.226 34.029-24.339 1.082-0.458 2.188-0.49 2.985-0.166 0.782 0.308 1.619 0.987 1.895 1.635 1.579 3.727-0.095 5.915-3.554 8.284-22.649 15.526-42.037 30.909-50.186 38.522-7.297 6.799-5.615 9.334-3.388 10.385 6.736 3.206 33.65 0.371 49.049-5.386 1.429-0.521 2.361 0.237 1.998 1.287s-1.469 2.464-3.759 3.664c-10.235 5.362-43.979 10.669-57.215 4.091-3.972-1.974-4.801-6.799-2.503-11.23 0.024-0.047 0.032-0.071 0.055-0.118z"></path>
                    <path fill="#fff" class="path14 path_sub_element" d="M426.091 912.082c1.769 0.434 3.198 2.464 3.83 3.767 0.387 0.79 1.319 1.224 2.045 1.019 1.113-0.324 2.188-0.434 3.309 0.458 2.314 1.816 1.619 2.772 0.727 3.696-7.479 7.771-12.999 15.131-14.815 22.815-1.437 6.065-1.516 10.78 3.68 11.925 5.362 1.177 10.906-1.437 14.823-3.909 2.424-1.524 4.446-1.019 4.446 0.237 0 1.129-0.624 3.017-3.625 5.283-5.054 3.814-15.020 5.962-21.070 4.572-4.651-1.066-10.029-6.886-9.374-12.58 0.332-2.898 1.161-6.855 1.548-8.339 0.213-0.806-0.174-1.192-1.5-0.537-3.293 1.627-16.679 6.942-22.925 8.331-5.583 1.232-9.8 1.192-12.738 0.174-1.785-0.616-7.708-4.557-5.923-9.366 0.821-2.211 3.87-5.82 12.383-11.617 7.218-4.904 18.89-10.969 29.14-14.136 8.711-2.693 13.867-2.33 15.842-1.848 0.095 0.008 0.118 0.039 0.197 0.055zM418.596 918.194c-2.18-0.561-6.784 0.711-12.951 3.483-10.906 4.92-19.080 12.288-22.586 16.173-1.903 2.109-1.864 4.209 0.671 5.046 1.548 0.505 4.912 0.126 9.334-1.121 3.933-1.113 10.685-4.067 17.832-7.992 2.803-1.54 8.387-6.31 9.224-7.068 1.074-0.971 2.18-3.072 2.109-4.454-0.055-1.137-1.074-3.419-3.443-4.028-0.071-0.008-0.111-0.024-0.19-0.039z"></path>
                    <path fill="#fff" class="path15 path_sub_element" d="M550.345 921.542c5.283-0.45 8.331 2.132 8.584 4.462 0.332 3.033-2.803 5.512-4.959 6.649-1.943 1.027-3.498 1.264-4.454 0.798-0.987-0.49-1.192-1.564-0.979-2.567 0.269-1.24-1.113-2.282-2.969-2.148-3.909 0.284-10.709 5.181-15.131 10.108-7.052 7.85-8.774 14.886-8.726 19.174 0.063 5.544 4.375 8.426 10.061 8.237 15.068-0.505 36.635-14.231 45.93-24.055 1.358-1.437 2.803-1.666 3.412-0.813 0.553 0.79 0.024 2.614-1.453 4.572-9.895 13.165-35.3 26.519-52.642 26.913-7.858 0.174-17.492-2.835-17.311-13.228 0.111-6.239 4.359-16.118 14.547-25.097 7.55-6.657 18.448-12.367 25.911-13.007 0.071-0.008 0.103 0.008 0.182 0z"></path>
                    <path fill="#fff" class="path16 path_sub_element" d="M578.569 961.691c-0.324-2.195 0.466-6.799 5.023-15.944 3.909-7.842 11.238-18.637 18.685-26.305 6.341-6.515 11.064-8.655 13.030-9.169 1.951-0.513 4.659 0.553 5.504 1.398 0.347 0.34 1.208 0.411 1.895-0.245 0.892-0.853 1.951-1.24 3.151-1.058 2.954 0.466 3.206 1.808 2.748 3.38-2.969 10.037-4.114 19.332-2.977 27.056 0.837 5.718 2.14 10.227 6.278 9.066 5.71-1.587 18.756-18.914 28.477-40.963 1.208-2.74 3.538-3.491 4.209-1.816 0.877 2.18-0.087 6.563-2.282 11.174-8.308 17.437-20.525 36.745-33.389 40.157-5.433 1.445-9.832-2.030-11.19-8.016-0.569-2.519-0.734-6.744-1.106-7.842-0.245-0.727-0.663-0.963-1.398 0.19-2.022 3.19-11.435 14.207-16.055 18.242-4.407 3.838-8.197 5.725-11.048 6.183-2.053 0.34-8.805-0.308-9.548-5.386 0.008-0.047 0-0.047-0.008-0.103zM590.162 955.887c0.19 1.098 1.161 1.911 2.961 1.587 1.611-0.292 4.533-2.338 7.597-5.41 2.827-2.843 7.392-8.916 11.822-15.502 1.832-2.732 4.407-9.579 4.738-10.614 0.498-1.548 0.387-3.712-0.387-5.212s-2.211-2.551-4.572-1.958c-2.725 0.679-5.923 4.13-9.982 9.571-4.438 5.947-13.275 21.251-12.193 27.395 0.008 0.063 0.008 0.095 0.016 0.142z"></path>
                    <path fill="#fff" class="path17 path_sub_element" d="M699.151 876.876c3.467-1.872 6.405-0.821 7.115 1.627 0.49 1.635-0.032 4.438-0.782 6.12-0.782 1.761-2.243 2.701-3.562 2.701-1.224 0-2.954 0.166-4.462 0.94-2.401 1.24-4.438 5.686-6.831 11.001-5.718 12.699-9.382 26.337-12.146 39.62-0.466 2.211-1.737 3.538-3.475 4.217-1.548 0.608-3.593 0.537-5.165-0.095-1.714-0.695-2.148-2.164-1.722-4.541 1.271-6.997-0.869-26.211-2.045-32.844-0.845-4.794-0.956-7.076 0.047-8.861 0.916-1.643 2.709-5.054 4.399-5.781 2.409-1.042 5.007 0.9 5.567 2.377 0.466 1.216 0.197 2.685-0.063 3.996-0.884 4.486-0.363 14.065 0.411 17.942 0.387 1.935 1.208 1.595 2.109-0.6 2.811-6.942 7.186-18.653 11.396-26.495 2.969-5.536 5.591-9.374 9.050-11.238 0.055-0.047 0.095-0.055 0.158-0.087z"></path>
                    <path fill="#fff" class="path18 path_sub_element" d="M755.749 892.734c7.716-5.228 15.242-18.006 17.634-22.57 1.485-2.811 3.459-1.729 2.701 0.719-1.248 4.012-5.631 14.349-17.469 27.608-2.203 2.464-4.296 4.043-5.907 5.094-3.783 2.448-11.411 4.225-13.867 0.197-0.869-1.429-1.256-3.806-1.421-7.107-0.213-4.312-2.306-20.422-2.519-23.526-0.095-1.311-0.505-1.477-1.919-0.419-1.864 1.406-5.489 4.162-7.068 5.307-1.429 1.035-2.827 1.437-3.949 1.453-1.564 0.024-1.951-1.572-1.374-3.064 0.608-1.556 1.343-2.614 3.427-4.391 2.203-1.88 5.109-4.091 7.834-6.357 1.461-1.208 1.801-2.18 1.737-3.309-0.134-2.259-2.282-16.173-2.685-19.553-0.237-2.037 1.098-6.057 3.309-7.684 1.042-0.766 2.045-0.884 3.262-0.498 1.619 0.505 2.796 1.564 2.906 3.878 0.411 8.853 1.469 16.292 1.611 17.698 0.126 1.185 0.987 0.671 2.219-0.237 4.612-3.404 16.947-13.962 25.295-21.125 3.127-2.685 3.080 0.616 0.916 3.23-3.277 3.972-11.49 12.746-25.46 25.026-1.611 1.414-2.037 1.943-1.887 3.514 0.663 7.115 2.33 18.851 3.949 23.581 1.619 4.746 4.343 5.489 8.537 2.646 0.071-0.032 0.126-0.063 0.19-0.111z"></path>
                    <path fill="#fff" class="path19 path_sub_element" d="M790.268 860.126c-3.419-4.004-5.915-15.376-5.86-27 0.024-4.707 0.963-19.877 5.931-24.939 1.935-1.974 3.925-2.124 4.825-1.374 0.3 0.245 1.279 0.245 2.432-0.75 3.238-2.796 7.408-4.328 10.48-1.532 3.175 2.89 4.612 8.134 4.004 13.022-0.853 6.926-3.656 15.297-11.459 22.681-1.406 1.319-3.088 2.037-4.415 2.393-0.884 0.237-1.192 0.545-1.027 1.674 0.269 1.808 1.508 5.41 3.269 7.36 2.969 3.285 7.076 2.393 11.348-1.643 6.16-5.82 10.116-16.173 11.601-20.746 0.592-1.832 2.361-4.541 2.946-4.359 0.679 0.205 1.327 2.448 1.129 4.896-0.49 5.844-6.176 20.943-14.934 29.022-5.844 5.394-15.028 7.431-20.161 1.429-0.039-0.055-0.071-0.095-0.111-0.134zM796.451 835.574c7.408-7.013 10.203-17.753 6.199-21.591-2.393-2.298-5.646-1.516-7.494 0.355-3.522 3.562-2.748 15.96-1.595 22.041 0.213 1.129 0.798 1.169 2.764-0.687 0.047-0.055 0.071-0.063 0.126-0.118z"></path>
                    <path fill="#f3f1da" class="path_element" d="M709.085 150.212c0 41.151-33.359 74.51-74.51 74.51s-74.51-33.359-74.51-74.51c0-41.151 33.359-74.51 74.51-74.51s74.51 33.359 74.51 74.51z"></path>
                </svg>
            </a>
            <span>a la carte</span>
        </div>

        <?php
        //this does not display on large screen
        $this->load->view('atoa/new_menu');
        ?>

        <ul class="nav navbar-nav navbar-right">
            <li class="lg-show">
                <a href="/" class="tooltip">
                    <svg width="40px" height="40px" viewBox="0 0 1024 1024" id="icon-home-2" class="svg_icon">
                        <path fill="#999" class="path1 fill-color2"
                              d="M818.859 511.317c-2.731 6.144-8.875 10.24-15.701 10.24h-54.613c-4.437 0-8.875-1.707-12.288-5.12l-232.448-243.371-232.448 243.029c-3.072 3.413-7.509 5.12-12.288 5.12h-54.955c-6.827 0-12.971-4.096-15.701-10.24s-1.365-13.312 3.413-18.432l296.96-307.883c4.096-4.096 9.557-6.485 15.019-6.485s10.923 2.048 14.677 6.144l296.96 308.224c4.779 5.461 6.144 12.629 3.413 18.773zM287.061 539.648v184.661c0 16.725 11.264 30.379 25.6 30.379h120.832v-200.363c0-17.067 13.653-30.72 30.72-30.72h79.189c17.067 0 30.72 13.653 30.72 30.72v200.363h121.173c13.995 0 25.6-13.653 25.6-30.379v-183.979l-216.747-226.987-217.088 226.304z"></path>
                    </svg>

                    <span>
                        <img src="<?php echo base_url('public/images/icons/callout.gif');?>" alt="" class="callout">
                        Take me back to the home page
                    </span>
                </a>
            </li>
            <li>
                <a href="https://www.facebook.com/travelasia.travel" target="_blank" class="tooltip">
                    <svg width="40px" height="40px" viewBox="0 0 1024 1024" id="icon-facebook" class="svg_icon">
                        <path fill="#999" class="path1 fill-color2"
                              d="M419.499 780.971v-305.152h-90.112v-115.712h90.112c1.024-36.864 2.048-73.728 3.072-110.592 2.048-53.589 36.181-97.28 110.592-97.28h139.264v122.197h-113.323v90.795h116.395v107.861h-113.323v307.883h-142.677z"></path>
                    </svg>

                    <span>
                        <img src="<?php echo base_url('public/images/icons/callout.gif');?>" alt="" class="callout">
                        Checkout our facebook page
                    </span>
                </a>
            </li>
            <li>
                <a href="https://plus.google.com/114462909490985493210/about?gmbpt=true&hl=en&_ga=1.234855838.1434231122.1395658147"
                   target="_blank" class="tooltip">
                    <svg width="40px" height="40px" viewBox="0 0 1024 1024" id="icon-google-plus" class="svg_icon">
                        <path fill="#999" class="path1"
                              d="M529.063 558.981l-30.041-23.33c-9.144-7.578-21.658-17.609-21.658-35.946 0-18.405 12.513-30.099 23.371-40.95 34.997-27.539 69.953-56.866 69.953-118.627 0-63.526-39.953-96.949-59.112-112.814h51.661l54.217-34.062h-164.263c-45.049 0-110.025 10.667-157.553 49.927-35.864 30.904-53.344 73.547-53.344 111.947 0 65.147 49.999 131.191 138.363 131.191 8.342 0 17.449-0.826 26.675-1.673-4.151 10.025-8.322 18.405-8.322 32.57 0 25.89 13.298 41.766 25.023 56.798-37.536 2.577-107.609 6.728-159.266 38.479-49.19 29.256-64.171 71.847-64.171 101.905 0 61.853 58.307 119.473 179.214 119.473 143.391 0 219.283-79.34 219.283-157.873 0.003-57.702-33.341-86.112-70.031-117.016zM419.867 462.896c-71.728 0-104.223-92.71-104.223-148.668 0-21.78 4.13-44.274 18.313-61.822 13.377-16.732 36.666-27.59 58.406-27.59 69.168 0 105.011 93.546 105.011 153.726 0 15.039-1.652 41.738-20.835 61.007-13.394 13.384-35.843 23.347-56.672 23.347zM420.69 798.857c-89.19 0-146.695-42.673-146.695-101.987s53.309-79.38 71.646-86.030c35.014-11.766 80.046-13.421 87.559-13.421 8.339 0 12.513 0 19.139 0.847 63.403 45.135 90.928 67.618 90.928 110.326 0.003 51.743-42.53 90.266-122.576 90.266z"></path>
                        <path fill="#999" class="path2"
                              d="M739.608 461.636v-83.531h-41.264v83.531h-83.391v41.694h83.391v84.057h41.264v-84.057h83.791v-41.694z"></path>
                    </svg>

                    <span>
                        <img src="<?php echo base_url('public/images/icons/callout.gif');?>" alt="" class="callout">
                        Find us on Google too
                    </span>
                </a>
            </li>
            <li>
                <a href="http://blog.travelasia.travel" target="_blank" class="tooltip">
                    <svg width="40px" height="40px" viewBox="0 0 1024 1024" id="icon-blog" class="svg_icon">
                        <path fill="#999" class="path1 fill-color2"
                              d="M942.24 565.531c0-14.759-11.947-26.706-26.726-26.706h-814.681c-14.78 0-26.771 11.947-26.771 26.706v26.242c0 14.725 11.991 26.709 26.771 26.709h814.681c14.78 0 26.726-11.984 26.726-26.709v-26.242z"></path>
                        <path fill="#999" class="path2 fill-color2"
                              d="M510.717 701.355c0-14.756-11.95-26.706-26.733-26.706h-383.15c-14.78 0-26.771 11.95-26.771 26.706v26.242c0 14.729 11.991 26.706 26.771 26.706h383.15c14.78 0 26.733-11.977 26.733-26.706v-26.242z"></path>
                        <path fill="#999" class="path3 fill-color2"
                              d="M942.24 430.985c0-14.749-11.947-26.706-26.726-26.706h-814.681c-14.78 0-26.771 11.957-26.771 26.706v26.218c0 14.793 11.991 26.74 26.771 26.74h814.681c14.78 0 26.726-11.947 26.726-26.74v-26.218z"></path>
                        <path fill="#999" class="path4 fill-color2"
                              d="M942.24 296.404c0-14.698-11.947-26.706-26.726-26.706h-814.681c-14.78 0-26.771 12.008-26.771 26.706v26.249c0 14.759 11.991 26.696 26.771 26.696h814.681c14.78 0 26.726-11.936 26.726-26.696v-26.249z"></path>
                    </svg>

                     <span>
                         <img src="<?php echo base_url('public/images/icons/callout.gif');?>" alt="" class="callout">
                        More information on our blog
                    </span>
                </a>
            </li>
            <li>
                <a href="mailto:info@travelasia.travel" target="_blank" class="tooltip">
                    <svg width="40px" height="40px" viewBox="0 0 1024 1024" id="icon-email" class="svg_icon">
                        <path fill="#999" class="path1 fill-color2"
                              d="M236.203 311.296v312.32c60.075-52.224 120.491-104.448 180.565-156.672-60.416-51.541-120.491-103.424-180.565-155.648zM526.336 539.989c-7.851 6.827-17.749 6.827-25.6 0-18.773-16.384-37.547-32.427-56.32-48.811-58.368 50.859-116.736 101.376-174.763 152.235 161.451 0 322.901 0 484.352 0-57.685-50.517-115.029-101.376-172.715-151.893-18.432 16.043-36.864 32.427-54.955 48.469zM513.365 503.125l55.296-48.811c62.464-54.613 124.587-109.568 187.051-164.181h-489.131c63.488 54.955 126.976 109.568 190.464 164.181 18.773 16.384 37.547 32.427 56.32 48.811zM608.939 467.285c58.709 51.883 117.76 103.765 176.469 155.648v-310.955l-176.469 155.307z"></path>
                    </svg>

                    <span>
                        <img src="<?php echo base_url('public/images/icons/callout.gif');?>" alt="" class="callout">
                        Email us now
                    </span>
                </a>
            </li>
        </ul>
    </div><!--/.nav-collapse -->
</nav>