<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>foo contact</title>
  </head>
  <body>

    <h1>hello this is contact</h1>
    <div class="">
      <form action="contact" method="post">
        @csrf
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" > <br> <br>

        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" > <br>
        <br>
        <label for="email">Email</label>
        <input type="email" name="email">
        <input type='submit' value="submit">
      </form>
    </div>

  </body>
</html>
