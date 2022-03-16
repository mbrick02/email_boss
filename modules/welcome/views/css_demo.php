<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?= BASE_URL ?>css/trongate.css">
  <title>Document</title>
</head>
<body>
<div class="container fill-page">
  <h1>Trongate CSS Demo</h1>
  <h2>Buttons</h2>
  <p>
      <button>Normal Button</button>
      <button class="alt">Alternative Button</button>
  </p>
  <h3>Custom Buttons</h3>
  <p>
      <button class="warning">Warning</button>
      <button class="danger">Danger</button>
      <button class="success">Success</button>
      <button>Success</button>
  </p>
  <h3>Different Size Buttons</h3>
  <h4>Smaller</h4>
  <p class="smaller">
      <button class="warning">Warning</button>
      <button class="danger">Danger</button>
      <button class="success">Success</button>
      <button>Success</button>
  </p>
  <h4>Bigger</h4>
  <p class="bigger">
      <button class="warning">Warning</button>
      <button class="danger">Danger</button>
      <button class="success">Success</button>
      <button>Success</button>
  </p>
  <h2>Forms</h2>
  <form action="#">
  <label>First Name</label>
  <input type="text" name="firstname" placeholder="Enter your first name here">
  <label>Last Name</label>
  <input type="text" name="lastname" placeholder="Enter your last name here">
  <label>City</label>
  <select name="city">
  <option value="" selected="">Select city...</option>
  <option value="1">London</option>
  <option value="2">Paris</option>
  <option value="3">New York</option>
  </select>
  <label>Email Address</label>
  <input type="email" name="email"  placeholder="Enter your email address here">
  <label>Description</label>
  <textarea name="description" rows="5" placeholder="Use this space to enter a description"></textarea>
  <button>Submit</button>
  <a href="#" class="button alt">Cancel</a>
  <p><input type="checkbox" name="join" value="1" checked=""> Add me to the mailing list</p>
  </form>

  <h3>Text Align</h3>
  <p>Here is some normal text.</p>
  <p class="text-right">Here is some right aligned text.</p>
  <p class="text-center">Here is some centered text.</p>
  <p class="text-left">Here is some left aligned text.</p>

  <h3>Floats</h3>
  <p><button class="float-right">Float Right Button</button></p>
  <p><button class="float-left">Float Left Button</button></p>

  <h3 style="clear:both; margin-top:7em;">Text Links</h3>
  <p>Here comes a link. <a href="#">Click Me Link</a></p>
  <p>link button. <a href="#" class="button">Click Me button</a></p>
  <p>alt link button. <a href="#" class="button alt">Click Me alt button</a></p>

  <h3>Tables</h3>
  <table>
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Age</th>
      <th>City</th>
    </tr>
    <tr>
      <td>John</td>
      <td>Smith</td>
      <td>32</td>
      <td>London</td>
    </tr>
    <tr>
      <td>Aarah</td>
      <td>Jones</td>
      <td>21</td>
      <td>New York</td>
    </tr>
    <tr>
      <td>Sam</td>
      <td>Whatever</td>
      <td>45</td>
      <td>Paris</td>
    </tr>
  </table>


  <p style="height: 900px;">&nbsp;</p>


    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
      Culpa earum ut quo eveniet molestiae corporis debitis minima soluta
      omnis libero iusto, quis sed, distinctio, praesentium necessitatibus,
      quae sapiente temporibus enim.</p>

</div>
</body>
<style>
body {
  background-color: SteelBlue;
}

.fill-page{
  background-color: white;
  min-height: 100vh;
}

.warning {
  background-color: orange;
  border: 1px orange solid;
}
.warning:hover {
  background-color: #b17404;
  border: 1px #b17404 solid;
} /* went into inspect chose warning button and double-clicked for
color picker and just dragged down for hover darker color */

.danger {
  background-color: red;
  border: 1px red solid;
}
.danger:hover {
  background-color: #990000;
  border: 1px #990000 solid;
}

.success {
  background-color: green;
  border: 1px green solid;
}
.success:hover {
  background-color: #005500;
  border: 1px #005500 solid;
}
.smaller {
  font-size: 0.8em;
}
.bigger {
  font-size: 1.4em;
}

</style>
</html>
