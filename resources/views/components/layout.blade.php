<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
  
    <link href='@yield('link')' rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @vite('resources/css/app.css')
    <title>@yield('title')</title>
</head>
<body class="bg-[#f8f8f8]">
  
    <x-flash-message/>
    {{$slot}}
    <script>
        $(document).ready(function() {
            $('#school').change(function() {
                var selectedValue = $(this).val();
                console.log(selectedValue);
                $.ajax({
                    url: '/get-options/' + selectedValue,
                    type: 'GET',
                    success: function(response) {
                        
                        $('#name').empty();
                        $('#name').html('<option selected hidden disabled value="">Choose Name</option>');
                        
                        $.each(response, function(index, option) {
                            let name = option.firstName + " " + option.midName + " " + option.lastName;
                            
                            $('#name').append($('<option>').text(name).attr('value', option.id + "|" + name));
                        });
                    }
                });
            });
        });
    </script>
</body>
</html>