<html>
    <body>
        <h1>Hello {{ $first_name ?? '' }} {{ $last_name ?? '' }}</h1>
        <p>your email is : {{ $email ?? ''}}</p>

        <!--  this form will send details to controller : and route back to this page -->
    </body>
</html>
