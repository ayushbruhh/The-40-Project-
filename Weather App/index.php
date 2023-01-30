<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./style2.css">
  <script src="./script2.js" defer></script>
    <title>Weather App</title>
</head>
<body>
    
    <div class="container">
        <div class="current-info">

            <div class="date-container">
                <div class="time" id="time">
                    12:30 <span id="am-pm">PM</span>
                </div>
                <div class="date" id="date">
                    Monday, 25 May
                </div>

                <div class="others" id="current-weather-items">
                    
                    
                </div>
                
                <!-- //merge here -->
                <div class="card">
    <div class="search">
      <input type="text" class="search-bar" placeholder="Search">
      <button><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1.5em"
          width="1.5em" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z">
          </path>
        </svg></button>
    </div>
    <div class="weather loading">
      <h2 class="city">Weather in Ajmer</h2>
      <h1 class="temp">51°C</h1>
      <div class="flex">
        <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
        <div class="description">Cloudy</div>
      </div>
      <div class="humidity">Humidity: 60%</div>
      <div class="wind">Wind speed: 6.2 km/h</div>
    </div>
  </div>

  <!-- merged file here -->



            </div>

            <div class="place-container">
                <div class="time-zone" id="time-zone">Asia/Delh</div>
                <div id="country" class="country">IN</div>
            </div>
        </div>

        
    </div>

    <div class="future-forecast">
        <div class="today" id="current-temp">
            <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
            <div class="other">
                <div class="day">Monday</div>
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
        </div>

        <div class="weather-forecast" id="weather-forecast">
            <div class="weather-forecast-item">
                <div class="day">Tue</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Wed</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Thur</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Fri</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>
            <div class="weather-forecast-item">
                <div class="day">Sat</div>
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - 25.6&#176; C</div>
                <div class="temp">Day - 35.6&#176; C</div>
            </div>

        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <script src="script.js"></script>
</body>
</html>