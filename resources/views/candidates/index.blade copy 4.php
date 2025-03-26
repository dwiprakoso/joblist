<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      @vite(['resources/css/app.css','resources/js/app.js'])
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
      <link rel="icon" href="{{ url('images/job-match-white.svg') }}">
      <title>Selection Process</title>
</head>
<body>
    @include('candidates.components.sidebar')

    <div class=" sm:ml-80">
        <div class="p-4 m-4 rounded-lg dark:border-gray-700">

        </div>
    </div>
    
</body>
</html>