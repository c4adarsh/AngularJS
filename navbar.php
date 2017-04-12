<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.js"></script>
    <script type="application/javascript">
        function addListeners() {
            var ul = document.getElementById("navigation");
            var li = ul.getElementsByTagName("li");
            li[0].classList.add("active");
            for (var i = 0; i < li.length; i++) {
                li[i].addEventListener("click", function () {
                    removeActiveClass();
                    this.classList.add("active");
                });
            }

            function removeActiveClass() {
                for (var i = 0; i < li.length; i++) {
                    li[i].classList.remove("active");
                }
            }
        }

        function changeTab() {
            var ul = document.getElementById("navigation");
            var li = ul.getElementsByTagName("li");
            removeActiveClass();
            li[0].classList.add("active");

            function removeActiveClass() {
                for (var i = 0; i < li.length; i++) {
                    li[i].classList.remove("active");
                }
            }
        }

        function makeContainerVisible() {
            document.getElementById("the_progress_bar_container").style.display = 'none';
            document.getElementById("the_container").style.display = 'block';
        }

        function makeContainerInvisible() {
            document.getElementById("the_container").style.display = 'none';
            // document.getElementById("the_progress_bar_container").style.visibility = "visible";
        }

        function makeProgressBarVisible() {
            document.getElementById("the_container").style.display = 'none';
            document.getElementById("the_progress_bar_container").style.display = 'block';
        }

        function makeProgressBarInvisible() {
            document.getElementById("the_progress_bar_container").style.display = 'none';
        }

        function makeClear() {
            document.getElementById("the_container").style.display = 'none';
            document.getElementById("the_progress_bar_container").style.display = 'none';
            document.getElementById("txt_search").value = "";
            changeTab();
        }

        function setCustomMessage() {
            var text_search = document.getElementById('txt_search');
            if (text_search.value) {
                if (text_search.value.length == 0) {
                    text_search.setCustomValidity("Please type a keyword");
                }
                else {
                    text_search.setCustomValidity("");
                }
            }
            else {
                text_search.setCustomValidity("Please type a keyword");
            }
        }

        function removeCustomMessage() {
            var text_search = document.getElementById('txt_search');
            if (text_search.value) {
                text_search.setCustomValidity("");
            }
        }
        var crd;
        var options = {
            enableHighAccuracy: true
            , timeout: 5000
            , maximumAge: 0
        };

        function success(pos) {
            crd = pos.coords;
        };

        function error(err) {
            //  console.warn(`ERROR(${err.code}): ${err.message}`);
        };
        navigator.geolocation.getCurrentPosition(success, error, options);
    </script>
    <style>
        .nav-justified > li > a {
            margin-bottom: 0;
            color: black;
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: white;
        }
        
        .nav-justified > .active >a {
            background-color: #3b5998;
            color: white;
        }
        
        .nav-justified > li > a:focus {
            background-color: #3b5998;
        }
        
        .nav {
            border-bottom: 2px solid #3b5998;
        }
        
        .top_layout {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        .change_color {
            background-color: white;
            margin-left: 100px;
        }
        
        .change_radius {
            border-radius: 0px;
        }
        
        .btn .btn-default {
            margin-left: 15px;
        }
        
        .input-group-btn.input-space {
            padding-left: 15px;
        }
        
        .btn_width {
            width: 80px;
        }
        
        .fb_text_align_center {
            padding: 0px;
            height: 34px;
            padding-top: 4px;
            padding-left: 15px;
            color: #3b5998;
            font-size: 1.2em;
        }
        
        .container_fb {
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #F5F5F5;
        }
        
        .fb_color {
            color: #3b5998;
        }
        
        .btn-primary,
        .btn-primary:hover,
        .btn-primary:active,
        .btn-primary:visited,
        .btn-primary:focus {
            background-color: #3b5998;
            border-color: #3b5998;
        }
        
        .btn-default,
        .btn-default:hover,
        .btn-default:active,
        .btn-default:visited,
        .btn-default:focus {
            border-color: #3b5998;
            color: #3b5998;
        }
        
        .custom-white,
        .custom-white:hover,
        .custom-white:active,
        .custom-white:focus,
        .custom-white:visited {
            border: 1px solid black;
            box-shadow: none;
        }
        
        .star-button,
        .star-button:hover,
        .star-button:active,
        .star-button:focus,
        .star-button:visited,
        .star-button:link,
        .star-button:active:focus {
            background-color: white;
            border: 1px solid #DDDDDD;
            border-radius: 4px;
            box-shadow: none;
            outline: 0;
        }
        
        .margin_top_progress_bar {
            margin-top: 80px;
        }
        
        .all_errors {
            padding-top: 100px;
            text-align: center;
        }
        
        .next_button_padding {
            width: 100px;
            border-color: black;
            color: black;
        }
        
        .prev_margin_right {
            margin-right: 20px;
        }
        
        .align_next_prev {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .no_margin_bottom {
            margin-bottom: 0px;
        }
        
        .add_bottom_margin {
            margin-bottom: 50px;
        }
        
        .glyphicon-star {
            color: yellow;
            color: #FBBA00;
        }
        
        .panel-borderless {
            border: 0;
            box-shadow: none;
            -webkit-box-shadow: none;
        }
        
        .panel-body-change {
            margin-top: -20px;
            padding: 0px;
        }
        
        .span-button-padding {
            padding-top: 2px;
        }
        
        .button-padding {
            padding-left: 0px;
        }
        
        #fb {
            background: url(facebook.png) no-repeat;
        }
        
        .image_drawable {
            height: 20px;
            width: 20px;
        }
        
        .image_drawable_button {
            height: 36px;
            width: 40px;
        }
        
        .change_button {
            padding: 0px;
        }
        
        .start_button_margin {
            margin-right: 20px;
        }
        
        .panel-group {
            margin-bottom: 3px;
        }
        
        .remove_padding_left {
            padding-left: 0px;
        }
        
        .remove_padding_right {
            padding-right: 0px;
        }
        
        .remove_padding {
            padding: 0px;
        }
        
        .padding_40_top {
            padding-top: 30px;
        }
        
        .img-rounded {
            border-radius: 6px;
            padding-bottom: 10px;
        }
        
        .posts-table-row {
            width: 30px;
            height: 30px;
        }
        
        .posts-column-1 {
            padding-left: 9px;
            font-size: smaller;
            font-weight: bold;
            margin-bottom: 0px;
        }
        
        .posts-column-2 {
            font-size: x-small;
            padding-left: 9px;
            margin-bottom: 0px;
            color: lightslategrey;
        }
        
        .remove_border_padding {
            border: 0px;
            margin-bottom: 0px;
        }
        
        .margin-top-panel-content {
            padding-top: 10px;
        }
        
        .panel_progress_bar_change {
            border: 0px;
            box-shadow: none;
            margin-bottom: 0px;
        }
        
        .error_message_no_data {
            color: #8a6d3b;
            background-color: #fcf8e3;
            border-color: #faebcc;
        }
        
        .details,
        .list-item {
            -webkit-transition: all 0 cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -moz-transition: all 0 cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -ms-transition: all 0 cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -o-transition: all 0 cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition: all 0 cubic-bezier(0.25, 0.46, 0.45, 0.94);
            /* easeOutQuad */
            -webkit-transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -moz-transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -ms-transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            -o-transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
            transition-timing-function: cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        
        .details-add {
            transform: translateX(-100%);
            transition-duration: 1s;
            -webkit-transition-duration: 1s;
        }
        
        .list-item-add {
            transform: translateX(100%);
            transition-duration: 1s;
            -webkit-transition-duration: 1s;
        }
        
        .details,
        .list-item {
            opacity: 1;
            transform: translateX(0);
        }
        
        @media (max-width: 767px) {
            .btn_width {
                width: 40px;
            }
        }
        
        @media (max-width: 767px) {
            .add_bottom_margin {
                margin-bottom: 30px;
            }
        }
        
        @media (max-width: 767px) {
            .container_fb {
                padding-top: 0px;
                background-color: #F5F5F5;
            }
        }
        
        @media (max-width: 767px) {
            .nav-justified > li >a {
                line-height: 10px;
            }
        }
    </style>
</head>

<body>
    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: 748982581944529
                , xfbml: true
                , version: 'v2.8'
            });
            FB.AppEvents.logPageView();
        };
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <div ng-app="myApp" ng-controller="myCtrl">
        <div class="container-fluid container_fb">
            <form name="myForm">
                <div class="row">
                    <div class="col-sm-3 fb_text_align_center"> FB Search </div>
                    <div class="col-sm-6">
                        <div class="input-group">
                            <input name="myName" type="text" class="form-control change_radius" ng-model="searchValue" required placeholder="type something..." id="txt_search" onChange="removeCustomMessage()" />
                            <div class="input-group-btn">
                                <button class="btn btn-primary change_radius btn_width" ng-click="search()"> <span class="glyphicon glyphicon-search"></span> </button>
                            </div> <span class="input-group-btn input-space">
                    <button class="btn btn-default change_radius" type="button" onClick="makeClear()" ng-click="clearAll()">Clear</button>
               </span> </div>
                    </div>
                    <div class="col-sm-3"> </div>
                </div>
                <!--<div> <span ng-show="myForm.myName.$touched && myForm.myName.$invalid">The name is required.</span></div>-->
            </form>
        </div>
        <div class="add_bottom_margin">
            <ul class="nav nav-justified" id="navigation">
                <li><a ng-click="selectTab('users')" href="#">Users</a></li>
                <li><a ng-click="selectTab('pages')" href="#">Pages</a></li>
                <li><a ng-click="selectTab('events')" href="#">Events</a></li>
                <li><a ng-click="selectTab('places')" href="#">Places</a></li>
                <li><a ng-click="selectTab('groups')" href="#">Groups</a></li>
                <li><a ng-click="selectTab('favorites')" href="#">Favorites</a></li>
            </ul>
        </div>
        <script>
            addListeners();
        </script>
        <div class="container-fluid" id="the_container" ng-class="{'list-item':!details}" style="display: none;" ng-hide="details">
            <div id="Users" ng-show="users">
                <!--ng-repeat for users-->
                <div class="container-fluid" ng-hide="users_error">
                    <div class="table-responsive">
                        <table class="table table-hover no_margin_bottom">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponse">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{ eachTuple.picture.data.url }}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{ eachTuple.name }}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="changeClassClick(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'User')"><span id="{{eachTuple.id}}" ng-class="getClass(eachTuple.id)"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'User')"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container align_next_prev">
                    <button type="button" class="btn btn-default next_button_padding prev_margin_right" ng-show="is_users_prev_present" ng-click="callPreviousUser()">Previous</button>
                    <button type="button" class="btn btn-default next_button_padding" ng-show="is_users_next_present" ng-click="callNextUser()">Next</button>
                </div>
                <div class="all_errors" ng-show="users_error"> No records have been found </div>
            </div>
            <div id="Pages" ng-show="pages">
                <div class="container-fluid" ng-hide="pages_error">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponsePages">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{ eachTuple.picture.data.url }}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{ eachTuple.name }}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="changeClassClick(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Page')"><span id="{{eachTuple.id}}" ng-class="getClass(eachTuple.id)"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Page')"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container align_next_prev">
                    <button type="button" class="btn btn-default next_button_padding prev_margin_right" ng-show="is_pages_prev_present" ng-click="callPreviousPage()">Previous</button>
                    <button type="button" class="btn btn-default next_button_padding" ng-show="is_pages_next_present" ng-click="callNextPage()">Next</button>
                </div>
                <div class="all_errors" ng-show="pages_error"> No records have been found </div>
            </div>
            <div id="Events" ng-show="events">
                <div class="container-fluid" ng-hide="events_error">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponseEvents">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{ eachTuple.picture.data.url }}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{ eachTuple.name }}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="changeClassClick(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Event')"><span id="{{eachTuple.id}}" ng-class="getClass(eachTuple.id)"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Event')"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container align_next_prev">
                    <button type="button" class="btn btn-default next_button_padding prev_margin_right" ng-show="is_events_prev_present" ng-click="callPreviousEvent()">Previous</button>
                    <button type="button" class="btn btn-default next_button_padding" ng-show="is_events_next_present" ng-click="callNextEvent()">Next</button>
                </div>
                <div class="all_errors" ng-show="events_error"> No records have been found </div>
            </div>
            <div id="Places" ng-show="places">
                <div class="container-fluid" ng-hide="places_error">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponsePlaces">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{ eachTuple.picture.data.url }}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{ eachTuple.name }}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="changeClassClick(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Place')"><span id="{{eachTuple.id}}" ng-class="getClass(eachTuple.id)"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Place')"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container align_next_prev">
                    <button type="button" class="btn btn-default next_button_padding prev_margin_right" ng-show="is_places_prev_present" ng-click="callPreviousPlace()">Previous</button>
                    <button type="button" class="btn btn-default next_button_padding" ng-show="is_places_next_present" ng-click="callNextPlace()">Next</button>
                </div>
                <div class="all_errors" ng-show="places_error"> No records have been found </div>
            </div>
            <div id="Groups" ng-show="groups">
                <div class="container-fluid" ng-hide="groups_error">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponseGroups">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{ eachTuple.picture.data.url }}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{ eachTuple.name }}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="changeClassClick(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Group')"><span id="{{eachTuple.id}}" ng-class="getClass(eachTuple.id)"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.picture.data.url,'Group')"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container align_next_prev">
                    <button type="button" class="btn btn-default next_button_padding prev_margin_right" ng-show="is_groups_prev_present" ng-click="callPreviousGroups()">Previous</button>
                    <button type="button" class="btn btn-default next_button_padding" ng-show="is_groups_next_present" ng-click="callNextGroups()">Next</button>
                </div>
                <div class="all_errors" ng-show="groups_error"> No records have been found </div>
            </div>
            <div id="Favorites" ng-show="favorites">
                <div class="container-fluid" ng-hide="favorites_error">
                    <div class="table-responsive">
                        <table class="table table-hover" id="favTab">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Profile Photo</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Favorite</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="eachTuple in myResponseFavorites">
                                    <td>{{$index+1}}</td>
                                    <td> <img ng-src="{{eachTuple.imageUrl}}" height="30px" width="30px" ng-style="circle_style"></td>
                                    <td>{{eachTuple.name}}</td>
                                    <td>{{eachTuple.type}}</td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="deleteClick(eachTuple.id)"><span class="glyphicon glyphicon-trash"></span></button>
                                    </td>
                                    <td>
                                        <button class="custom-white star-button" ng-click="goToNextPage(eachTuple.id, eachTuple.name, eachTuple.link, eachTuple.imageUrl,eachTuple.type)"><span class="glyphicon glyphicon-menu-right"></span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="all_errors" ng-show="favorites_error"> No records have been found </div>
            </div>
        </div>
        <div class="container" id="the_progress_bar_container" style="display:none;">
            <div class="progress margin_top_progress_bar">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%"> </div>
            </div>
        </div>
        <div id="details_container" ng-class="{'details':!details1}" ng-hide="details1">
            <div class="col-xs-12">
                <div class="panel-group">
                    <div class="panel panel-primary panel-borderless ">
                        <div class="panel-body panel-body-change">
                            <div class="btn-group">
                                <button class="btn btn-default" ng-click="goToMainPage()"><span class="glyphicon glyphicon-menu-left pull-left span-button-padding"></span>Back</button>
                            </div>
                            <div class="btn-group pull-right">
                                <div class="pull-right">
                                    <button ng-click="changeClassClickDetails(detail_id, detail_name, detail_link, detail_imageUrl,detail_type)" class="btn btn-default start_button_margin"><span id="detailsStar" ng-class="getClass(detail_id)"></span></button>
                                    <button ng-click="postToFaceBook()" class="btn btn-default change_button image_drawable_button"><img class="image_drawable" src="http://cs-server.usc.edu:45678/hw/hw8/images/facebook.png"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------both panels go here--------------------------------->
            <div class="container-fluid padding_40_top">
                <div id="panel1" class="col-xs-6 remove_padding_left">
                    <div class="panel panel-default">
                        <div class="panel-heading">Albums</div>
                        <div class="panel-body">
                            <!--------------------------------------------------------->
                            <div class="panel-group" id="accordion">
                                <!--------------------------------------------------------->
                                <div ng-repeat="eachTuple in detail_albums_response" class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#adarsh-{{$index}}">{{eachTuple.name}}</a>
        </h4> </div>
                                    <div id="adarsh-{{$index}}" ng-class="getClassPanel($index)">
                                        <div class="panel-body">
                                            <div ng-repeat="imageshow in eachTuple.pictures"> <img class="img-responsive img-rounded" ng-src="{{imageshow}}" /> </div>
                                        </div>
                                    </div>
                                </div>
                                <!--------------------------------------------------------->
                            </div>
                            <!--------------------------------------------------------->
                            <!-- ------lets put a progress bar here---------------------------->
                            <div id="the_posts_progressbar" class="panel panel-default panel_progress_bar_change" ng-show="albums_progress_bar_show">
                                <div class="panel-body">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%"> </div>
                                    </div>
                                </div>
                            </div>
                            <div id="the_posts_progressbar" class="panel panel-default" ng-show="albums_error_show">
                                <div class="panel-body error_message_no_data">
                                    <div> No data found</div>
                                </div>
                            </div>
                            <!------------progress bar ends here------------------------>
                        </div>
                    </div>
                </div>
                <div id="panel2" class="col-xs-6 remove_padding_right">
                    <div class="panel panel-default">
                        <div class="panel-heading">Posts</div>
                        <div class="panel-body">
                            <!--------------------------------------------------------->
                            <div class="panel-group" id="accordion">
                                <!--------------------------------------------------------->
                                <div ng-repeat="eachTuple in detail_posts_response" class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="table-responsive remove_border_padding">
                                            <table>
                                                <tr>
                                                    <td rowspan="2"><img class="posts-table-row" ng-src="{{ eachTuple.url }}"></td>
                                                    <td>
                                                        <p class="posts-column-1">{{ eachTuple.name }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <p class="posts-column-2">{{ eachTuple.time }}</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="margin-top-panel-content">{{eachTuple.post}}</div>
                                    </div>
                                </div>
                                <!--------------------------------------------------------->
                            </div>
                            <!--------------------------------------------------------->
                            <!-- ------lets put a progress bar here---------------------------->
                            <div id="the_posts_progressbar" class="panel panel-default panel_progress_bar_change" ng-show="posts_progress_bar_show">
                                <div class="panel-body">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:60%"> </div>
                                    </div>
                                </div>
                            </div>
                            <div id="the_posts_progressbar" class="panel panel-default" ng-show="posts_error_show">
                                <div class="panel-body error_message_no_data">
                                    <div> No data found</div>
                                </div>
                            </div>
                            <!------------progress bar ends here------------------------>
                        </div>
                    </div>
                </div>
            </div>
            <!----------------------------------------both panels end here--------------------------------->
        </div>
    </div>
    <script>
        var app = angular.module('myApp', ["ngAnimate"]);
        app.controller('myCtrl', function ($scope, $http) {
            $scope.users = true;
            $scope.pages = false;
            $scope.events = false;
            $scope.places = false;
            $scope.groups = false;
            $scope.favorites = false;
            $scope.users_error = false;
            $scope.pages_error = false;
            $scope.events_error = false;
            $scope.places_error = false;
            $scope.groups_error = false;
            $scope.favorites_error = false;
            $scope.users_next = "";
            $scope.pages_next = "";
            $scope.events_next = "";
            $scope.places_next = "";
            $scope.groups_next = "";
            $scope.users_prev = "";
            $scope.pages_prev = "";
            $scope.events_prev = "";
            $scope.places_prev = "";
            $scope.groups_prev = "";
            $scope.is_users_next_present = false;
            $scope.is_pages_next_present = false;
            $scope.is_events_next_present = false;
            $scope.is_places_next_present = false;
            $scope.is_groups_next_present = false;
            $scope.is_users_prev_present = false;
            $scope.is_pages_prev_present = false;
            $scope.is_events_prev_present = false;
            $scope.is_places_prev_present = false;
            $scope.is_groups_prev_present = false;
            $scope.is_submit_pressed = false;
            $scope.selected_tab = "";
            $scope.details = false;
            $scope.details1 = true;
            $scope.albums_progress_bar_show = true;
            $scope.posts_progress_bar_show = true;
            $scope.albums_error_show = false;
            $scope.posts_error_show = false;
            $scope.goToNextPage = function (id, name, link, imageUrl, type) {
                $scope.details = true;
                $scope.details1 = false;
                $scope.detail_id = id;
                $scope.detail_name = name;
                $scope.detail_link = link;
                $scope.detail_imageUrl = imageUrl;
                $scope.detail_type = type;
                $scope.getDetails(id);
            }
            $scope.goToMainPage = function () {
                $scope.details = false;
                $scope.details1 = true;
                //clean up all the details page stuff, so that its not visible when we go there second time
                $scope.detail_id = "";
                $scope.detail_name = "";
                $scope.detail_link = "";
                $scope.detail_imageUrl = "";
                $scope.detail_type = "";
                $scope.detail_albums_response = "";
                $scope.detail_posts_response = "";
                $scope.albums_progress_bar_show = true;
                $scope.posts_progress_bar_show = true;
                $scope.albums_error_show = false;
                $scope.posts_error_show = false;
                if ($scope.selected_tab == "favorites") {
                    $scope.getFavoriteItems();
                }
            }
            $scope.postToFaceBook = function () {
                FB.ui({
                    method: 'share'
                    , display: 'popup'
                    , href: $scope.detail_link
                , }, function (response) {
                    if (response) {
                        alert('Posted Successfully');
                    }
                    else {
                        alert('Not Posted')
                    }
                });
            }
            $scope.getDetails = function (id) {
                $http({
                    method: "GET"
                    , url: "search_aws.php?details=true" + "&id=" + id
                }).then(function mySucces(response) {
                    if (response['data']['albums']) {
                        if (response['data']['albums']['data']) {
                            the_right_response = [];
                            isAlbumFound = false;
                            //$scope.detail_albums_response = [];
                            for (album in response['data']['albums']['data']) {
                                //here we get album name
                                isAlbumFound = true;
                                var myObject = response['data']['albums']['data'][album];
                                var jsonDataFull = {};
                                name = "";
                                if (myObject['name']) {
                                    name = myObject['name'];
                                }
                                jsonDataFull['name'] = name;
                                var pictureArray = [];
                                if (myObject['photos']['data']) {
                                    var photoObjects = myObject['photos']['data'];
                                    for (photos in photoObjects) {
                                        if (photoObjects[photos]) {
                                            //pictureUrl = $scope.getHighResolutionUrl(photoObjects[photos]['id']);
                                            pictureUrl = "";
                                            if (photoObjects[photos]['images'][0]['source']) {
                                                pictureUrl = photoObjects[photos]['images'][0]['source'];
                                            }
                                            if (pictureUrl) {
                                                pictureArray.push(pictureUrl);
                                            }
                                        }
                                    }
                                }
                                jsonDataFull['pictures'] = pictureArray;
                                the_right_response.push(jsonDataFull);
                            }
                            if (isAlbumFound == false) {
                                //No albums found
                                $scope.albums_error_show = true;
                            }
                            $scope.albums_progress_bar_show = false;
                            $scope.detail_albums_response = the_right_response;
                        }
                        else {
                            //No albums found
                            $scope.albums_progress_bar_show = false;
                            $scope.albums_error_show = true;
                        }
                    }
                    else {
                        //No albums found
                        $scope.albums_progress_bar_show = false;
                        $scope.albums_error_show = true;
                    }
                    //this is for posts
                    if (response['data']['posts']) {
                        the_right_response_posts = [];
                        //lets take the name and Url
                        var fullName = "";
                        var fullUrl = "";
                        var isPostsFound = false;
                        if (response['data']['name']) {
                            fullName = response['data']['name'];
                        }
                        if (response['data']['picture']['data']['url']) {
                            fullUrl = response['data']['picture']['data']['url'];
                        }
                        if (response['data']['posts']['data']) {
                            for (post in response['data']['posts']['data']) {
                                isPostsFound = true;
                                var myObject = response['data']['posts']['data'][post];
                                var jsonDataFull = {};
                                jsonDataFull['name'] = fullName;
                                jsonDataFull['url'] = fullUrl;
                                message = "";
                                if (myObject['message']) {
                                    message = myObject['message'];
                                }
                                else if (myObject['story']) {
                                    message = myObject['story'];
                                }
                                jsonDataFull['post'] = message;
                                var createdTime = "";
                                if (myObject['created_time']) {
                                    createdTime = moment(myObject['created_time']).format("YYYY-MM-DD HH:mm:ss");
                                }
                                jsonDataFull['time'] = createdTime;
                                the_right_response_posts.push(jsonDataFull);
                            }
                            if (isPostsFound == false) {
                                $scope.posts_error_show = true;
                            }
                            $scope.detail_posts_response = the_right_response_posts;
                            $scope.posts_progress_bar_show = false;
                        }
                        else {
                            //No posts found 
                            $scope.posts_progress_bar_show = false;
                            $scope.posts_error_show = true;
                        }
                    }
                    else {
                        //No posts found 
                        $scope.posts_progress_bar_show = false;
                        $scope.posts_error_show = true;
                    }
                }, function myError(response) {
                    $scope.myResponse = "Error";
                });
            }
            $scope.circle_style = {
                'border-radius': '50px'
            }
            $scope.cleanUpNextPrev = function () {
                $scope.users_next = "";
                $scope.pages_next = "";
                $scope.events_next = "";
                $scope.places_next = "";
                $scope.groups_next = "";
                $scope.users_prev = "";
                $scope.pages_prev = "";
                $scope.events_prev = "";
                $scope.places_prev = "";
                $scope.groups_prev = "";
                $scope.is_users_next_present = false;
                $scope.is_pages_next_present = false;
                $scope.is_events_next_present = false;
                $scope.is_places_next_present = false;
                $scope.is_groups_next_present = false;
                $scope.is_users_prev_present = false;
                $scope.is_pages_prev_present = false;
                $scope.is_events_prev_present = false;
                $scope.is_places_prev_present = false;
                $scope.is_groups_prev_present = false;
            }
            $scope.selectTab = function (selectedTab) {
                /*if ($scope.details == true) { adarsh
                    $scope.is_submit_pressed = false;
                    $scope.clearAll();
                }*/
                $scope.goToMainPage();
                $scope.selected_tab = selectedTab;
                if (selectedTab == "users") {
                    if ($scope.is_submit_pressed) {
                        $scope.users = true;
                    }
                }
                else {
                    $scope.users = false;
                }
                if (selectedTab == "pages") {
                    if ($scope.is_submit_pressed) {
                        $scope.pages = true;
                    }
                }
                else {
                    $scope.pages = false;
                }
                if (selectedTab == "events") {
                    if ($scope.is_submit_pressed) {
                        $scope.events = true;
                    }
                }
                else {
                    $scope.events = false;
                }
                if (selectedTab == "places") {
                    if ($scope.is_submit_pressed) {
                        $scope.places = true;
                    }
                }
                else {
                    $scope.places = false;
                }
                if (selectedTab == "groups") {
                    if ($scope.is_submit_pressed) {
                        $scope.groups = true;
                    }
                }
                else {
                    $scope.groups = false;
                }
                if (selectedTab == "favorites") {
                    $scope.getFavoriteItems();
                    makeContainerVisible();
                }
                else {
                    $scope.favorites = false;
                }
            }
            $scope.getFavoriteItems = function () {
                var favourite_found_now = false;
                $scope.myResponseFavorites = [];
                for (var key in localStorage) {
                    if (key.includes("adarsh")) {
                        favourite_found_now = true;
                        $scope.myResponseFavorites.push(JSON.parse(localStorage.getItem(key)));
                    }
                }
                if (favourite_found_now == true) {
                    $scope.favorites_error = false;
                }
                else {
                    $scope.favorites_error = true;
                }
                $scope.favorites = true;
            }
            $scope.getClassPanel = function (id) {
                if (id == 0) {
                    return "panel-collapse collapse in";
                }
                else {
                    return "panel-collapse collapse";
                }
            }
            $scope.getClass = function (id) {
                var theYellowStarClass = "glyphicon glyphicon-star";
                var theStarClass = "glyphicon glyphicon-star-empty";
                var myNewId = 'adarsh-' + id;
                found = false;
                for (var key in localStorage) {
                    if (myNewId == key) {
                        console.log(key);
                        found = true;
                        break;
                    }
                }
                if (found) {
                    return theYellowStarClass;
                }
                else {
                    return theStarClass;
                }
            }
            $scope.changeClassClick = function (id, name, link, imageUrl, type) {
                var myNewId = 'adarsh-' + id;
                var theYellowStarClass = "glyphicon glyphicon-star";
                var theStarClass = "glyphicon glyphicon-star-empty";
                var favoriteObject = {
                    id: id
                    , name: name
                    , link: link
                    , imageUrl: imageUrl
                    , type: type
                };
                found = false;
                for (var key in localStorage) {
                    if (key == myNewId) {
                        found = true;
                        break;
                    }
                }
                if (found) {
                    document.getElementById(id).className = theStarClass;
                    localStorage.removeItem(myNewId);
                }
                else {
                    document.getElementById(id).className = theYellowStarClass;
                    localStorage.setItem(myNewId, JSON.stringify(favoriteObject));
                }
            }
            $scope.changeClassClickDetails = function (id, name, link, imageUrl, type) {
                var myNewId = 'adarsh-' + id;
                var theYellowStarClass = "glyphicon glyphicon-star";
                var theStarClass = "glyphicon glyphicon-star-empty";
                var favoriteObject = {
                    id: id
                    , name: name
                    , link: link
                    , imageUrl: imageUrl
                    , type: type
                };
                found = false;
                for (var key in localStorage) {
                    if (key == myNewId) {
                        found = true;
                        break;
                    }
                }
                if (found) {
                    document.getElementById('detailsStar').className = theStarClass;
                    localStorage.removeItem(myNewId);
                }
                else {
                    document.getElementById('detailsStar').className = theYellowStarClass;
                    localStorage.setItem(myNewId, JSON.stringify(favoriteObject));
                }
            }
            $scope.deleteClick = function (id) {
                localStorage.removeItem('adarsh-' + id);
                $scope.getFavoriteItems();
            }
            $scope.clearAll = function () {
                $scope.searchValue = "";
                $scope.is_submit_pressed = false;
                $scope.selected_tab = "users";
                $scope.goToMainPage();
                setCustomMessage();
                // $('#usersTab').tab('show');
            }
            $scope.search = function () {
                if ($scope.searchValue) {
                    $scope.goToMainPage();
                    makeProgressBarVisible();
                    $scope.is_submit_pressed = true;
                    $scope.cleanUpNextPrev();
                    if ($scope.selected_tab) {
                        $scope.selectTab($scope.selected_tab);
                    }
                    $scope.searchUser('fromSearch');
                    $scope.searchPages('fromSearch');
                    $scope.searchEvents('fromSearch');
                    $scope.searchPlaces('fromSearch');
                    $scope.searchGroups('fromSearch');
                    //setCustomMessage();
                }
                else {
                    /*show user a message to input data alert*/
                    makeProgressBarInvisible();
                    setCustomMessage();
                }
            }
            $scope.callNextUser = function () {
                $scope.searchUser('fromNext');
            }
            $scope.callPreviousUser = function () {
                $scope.searchUser('fromPrev');
            }
            $scope.callNextPage = function () {
                $scope.searchPages('fromNext');
            }
            $scope.callPreviousPage = function () {
                $scope.searchPages('fromPrev');
            }
            $scope.callNextEvent = function () {
                $scope.searchEvents('fromNext');
            }
            $scope.callPreviousEvent = function () {
                $scope.searchEvents('fromPrev');
            }
            $scope.callNextPlace = function () {
                $scope.searchPlaces('fromNext');
            }
            $scope.callPreviousPlace = function () {
                $scope.searchPlaces('fromPrev');
            }
            $scope.callNextGroups = function () {
                $scope.searchGroups('fromNext');
            }
            $scope.callPreviousGroups = function () {
                $scope.searchGroups('fromPrev');
            }
            $scope.searchUser = function (fromPlace) {
                if (fromPlace === 'fromSearch') {
                    mUrl = "search_aws.php?search_query=" + $scope.searchValue + "&type=User"
                }
                else if (fromPlace === 'fromNext') {
                    mUrl = $scope.users_next;
                }
                else {
                    mUrl = $scope.users_prev;
                }
                $http({
                    method: "GET"
                    , url: mUrl
                }).then(function mySucces(response) {
                    if (response['data'] && response['data']['data']) {
                        var check = response['data']['data'];
                        if (check.length == 0) {
                            $scope.users_error = true;
                        }
                        else {
                            $scope.users_error = false;
                        }
                        $scope.myResponse = response['data']['data'];
                        //get next and previous and reset the scopes as required
                        if (response['data']['paging']) {
                            if (response['data']['paging']['next']) {
                                $scope.users_next = response['data']['paging']['next'];
                                $scope.is_users_next_present = true;
                            }
                            else {
                                $scope.users_next = "";
                                $scope.is_users_next_present = false;
                            }
                            if (response['data']['paging']['previous']) {
                                $scope.users_prev = response['data']['paging']['previous'];
                                $scope.is_users_prev_present = true;
                            }
                            else {
                                $scope.users_prev = "";
                                $scope.is_users_prev_present = false;
                            }
                        }
                        else {
                            $scope.users_next = "";
                            $scope.users_prev = "";
                            $scope.is_users_next_present = false;
                            $scope.is_users_prev_present = false;
                        }
                    }
                    else {
                        $scope.users_error = true;
                        // makeProgressBarInvisible();
                    }
                }, function myError(response) {
                    // $scope.myResponse = "Error";
                    $scope.users_error = true;
                    // makeProgressBarInvisible();
                });
            }
            $scope.searchPages = function (fromPlace) {
                if (fromPlace === 'fromSearch') {
                    mUrl = "search_aws.php?search_query=" + $scope.searchValue + "&type=page"
                }
                else if (fromPlace === 'fromNext') {
                    mUrl = $scope.pages_next;
                }
                else {
                    mUrl = $scope.pages_prev;
                }
                $http({
                    method: "GET"
                    , url: mUrl
                }).then(function mySucces(response) {
                    if (response['data'] && response['data']['data']) {
                        var check = response['data']['data'];
                        if (check.length == 0) {
                            $scope.pages_error = true;
                        }
                        else {
                            $scope.pages_error = false;
                        }
                        $scope.myResponsePages = response['data']['data'];
                        //get next and previous and reset the scopes as required
                        if (response['data']['paging']) {
                            if (response['data']['paging']['next']) {
                                $scope.pages_next = response['data']['paging']['next'];
                                $scope.is_pages_next_present = true;
                            }
                            else {
                                $scope.pages_next = "";
                                $scope.is_pages_next_present = false;
                            }
                            if (response['data']['paging']['previous']) {
                                $scope.pages_prev = response['data']['paging']['previous'];
                                $scope.is_pages_prev_present = true;
                            }
                            else {
                                $scope.pages_prev = "";
                                $scope.is_pages_prev_present = false;
                            }
                        }
                        else {
                            $scope.pages_next = "";
                            $scope.pages_prev = "";
                            $scope.is_pages_next_present = false;
                            $scope.is_pages_prev_present = false;
                        }
                    }
                    else {
                        $scope.pages_error = true;
                        // makeProgressBarInvisible();
                    }
                }, function myError(response) {
                    //$scope.myResponsePages = "Error";
                    $scope.pages_error = true;
                    // makeProgressBarInvisible();
                });
            }
            $scope.searchEvents = function (fromPlace) {
                if (fromPlace === 'fromSearch') {
                    mUrl = "search_aws.php?search_query=" + $scope.searchValue + "&type=event"
                }
                else if (fromPlace === 'fromNext') {
                    mUrl = $scope.events_next;
                }
                else {
                    mUrl = $scope.events_prev;
                }
                $http({
                    method: "GET"
                    , url: mUrl
                }).then(function mySucces(response) {
                    if (response['data'] && response['data']['data']) {
                        var check = response['data']['data'];
                        if (check.length == 0) {
                            $scope.events_error = true;
                        }
                        else {
                            $scope.events_error = false;
                        }
                        $scope.myResponseEvents = response['data']['data'];
                        //get next and previous and reset the scopes as required
                        if (response['data']['paging']) {
                            if (response['data']['paging']['next']) {
                                $scope.events_next = response['data']['paging']['next'];
                                $scope.is_events_next_present = true;
                            }
                            else {
                                $scope.events_next = "";
                                $scope.is_events_next_present = false;
                            }
                            if (response['data']['paging']['previous']) {
                                $scope.events_prev = response['data']['paging']['previous'];
                                $scope.is_events_prev_present = true;
                            }
                            else {
                                $scope.events_prev = "";
                                $scope.is_events_prev_present = false;
                            }
                        }
                        else {
                            $scope.events_next = "";
                            $scope.events_prev = "";
                            $scope.is_events_next_present = false;
                            $scope.is_events_prev_present = false;
                        }
                    }
                    else {
                        $scope.events_error = true;
                        //makeProgressBarInvisible();
                    }
                }, function myError(response) {
                    //$scope.myResponseEvents = "Error";
                    $scope.events_error = true;
                    //makeProgressBarInvisible();
                });
            }
            $scope.searchPlaces = function (fromPlace) {
                if (crd) {
                    if (fromPlace === 'fromSearch') {
                        mUrl = "search_aws.php?search_query=" + $scope.searchValue + "&type=place" + "&lat=" + crd.latitude + "&lng=" + crd.longitude
                    }
                    else if (fromPlace === 'fromNext') {
                        mUrl = $scope.places_next;
                    }
                    else {
                        mUrl = $scope.places_prev;
                    }
                    $http({
                        method: "GET"
                        , url: mUrl
                    }).then(function mySucces(response) {
                        if (response['data'] && response['data']['data']) {
                            var check = response['data']['data'];
                            if (check.length == 0) {
                                $scope.places_error = true;
                            }
                            else {
                                $scope.places_error = false;
                            }
                            $scope.myResponsePlaces = response['data']['data'];
                            //get next and previous and reset the scopes as required
                            if (response['data']['paging']) {
                                if (response['data']['paging']['next']) {
                                    $scope.places_next = response['data']['paging']['next'];
                                    $scope.is_places_next_present = true;
                                }
                                else {
                                    $scope.places_next = "";
                                    $scope.is_places_next_present = false;
                                }
                                if (response['data']['paging']['previous']) {
                                    $scope.places_prev = response['data']['paging']['previous'];
                                    $scope.is_places_prev_present = true;
                                }
                                else {
                                    $scope.places_prev = "";
                                    $scope.is_places_prev_present = false;
                                }
                            }
                            else {
                                $scope.places_next = "";
                                $scope.places_prev = "";
                                $scope.is_places_next_present = false;
                                $scope.is_places_prev_present = false;
                            }
                        }
                        else {
                            $scope.places_error = true;
                            // makeProgressBarInvisible();
                        }
                    }, function myError(response) {
                        // $scope.myResponsePlaces = "Error";
                        $scope.places_error = true;
                    });
                }
                else {}
                //setLatLong();
            }
            $scope.searchGroups = function (fromPlace) {
                    if (fromPlace === 'fromSearch') {
                        mUrl = "search_aws.php?search_query=" + $scope.searchValue + "&type=group"
                    }
                    else if (fromPlace === 'fromNext') {
                        mUrl = $scope.groups_next;
                    }
                    else {
                        mUrl = $scope.groups_prev;
                    }
                    $http({
                        method: "GET"
                        , url: mUrl
                    }).then(function mySucces(response) {
                        if (response['data'] && response['data']['data']) {
                            var check = response['data']['data'];
                            if (check.length == 0) {
                                $scope.groups_error = true;
                            }
                            else {
                                $scope.groups_error = false;
                            }
                            $scope.myResponseGroups = response['data']['data'];
                            //get next and previous and reset the scopes as required
                            if (response['data']['paging']) {
                                if (response['data']['paging']['next']) {
                                    $scope.groups_next = response['data']['paging']['next'];
                                    $scope.is_groups_next_present = true;
                                }
                                else {
                                    $scope.groups_next = "";
                                    $scope.is_groups_next_present = false;
                                }
                                if (response['data']['paging']['previous']) {
                                    $scope.groups_prev = response['data']['paging']['previous'];
                                    $scope.is_groups_prev_present = true;
                                }
                                else {
                                    $scope.groups_prev = "";
                                    $scope.is_groups_prev_present = false;
                                }
                            }
                            else {
                                $scope.groups_next = "";
                                $scope.groups_prev = "";
                                $scope.is_groups_next_present = false;
                                $scope.is_groups_prev_present = false;
                            }
                        }
                        else {
                            $scope.groups_error = true;
                            //makeProgressBarInvisible();
                        }
                        makeContainerVisible();
                        //makeProgressBarInvisible();
                    }, function myError(response) {
                        // $scope.myResponseGroups = "Error";
                        $scope.groups_error = true;
                        makeContainerVisible();
                    });
                }
                /*---------------------------------------------------------------------*/
        });
        var acc = document.getElementsByClassName("accordion");
        var i;
        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                }
                else {
                    panel.style.display = "block";
                }
            }
        }
        $(window).on('resize', function () {
            var win = $(this);
            if (win.width() > 747) {
                $('#panel1').removeClass('col-xs-12 remove_padding');
                $('#panel2').removeClass('col-xs-12 remove_padding');
                $('#panel1').addClass('col-xs-6 remove_padding_left');
                $('#panel2').addClass('col-xs-6 remove_padding_right');
            }
            else {
                $('#panel1').removeClass('col-xs-6 remove_padding_left');
                $('#panel2').removeClass('col-xs-6 remove_padding_right');
                $('#panel1').addClass('col-xs-12 remove_padding');
                $('#panel2').addClass('col-xs-12 remove_padding');
            }
        });
    </script>
</body>

</html>