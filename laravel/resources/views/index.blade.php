<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Barroc-IT</title>
    <link href="{{ asset('/css/css.css') }}" rel="stylesheet"> 
  </head>
  <body>
<header>
  <div class="container">
    <h1><a href="#">Barroc-IT</a></h1>
  </div>
</header>
  <div class="container">
    <div class="wrapper_login">
    <section id="login">
    <form method="post" action="/">
      @csrf
      <select name="department" id="department">
        <option value="development">Development</option>
        <option value="sales">Sales</option>
        <option value="finance">Finance</option>
      </select>
      <label for="password">Password</label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit">Login</button>
    </form>
    </section>
  </div>
<section id="help">
  <div class="container">
    <h2>Help</h2>
  </div>
</section>
<footer>
  <p>© BARROC IT | 2017</p>
</footer>
  </body>
</html>
