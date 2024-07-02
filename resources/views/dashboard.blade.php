@extends('layouts.main')

    @section('content')
        <!-- UserProfiles Start -->
            <div class="tabs-container">

                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Account')" id="defaultOpen">Account</button>
                    <button class="tablinks" onclick="openCity(event, 'Security')">Security</button>
                    <button class="tablinks" onclick="openCity(event, 'Notifications')">Notifications</button>
                    <button class="tablinks" onclick="openCity(event, 'Accountactivity')">Account activity</button>
                    <form action="/logout" method="post">@csrf<button type="submit" class="tablinks">Logout</button></a></form>
                </div>

                <div id="Account" class="tabcontent">
                    <h3>Account</h3>
                </div>

                <div id="Security" class="tabcontent">
                    <h3>Security</h3>
                </div>

                <div id="Notifications" class="tabcontent">
                    <h3>Notifications</h3>
                </div>

                <div id="Accountactivity" class="tabcontent">
                    <h3>Account activity</h3>
                </div>

                <div id="Accountactivity" class="tabcontent">
                    <h3>Account activity</h3>
                </div>

            </div>
            <!-- UserProfiles End -->
    @endsection

    @push('js')
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
            document.getElementById("defaultOpen").click();
        </script>
    @endpush