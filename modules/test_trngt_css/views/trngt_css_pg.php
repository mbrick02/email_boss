<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trongate CSS</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>css/trongate.css">
    <link rel="stylesheet" href="<?= BASE_URL ?>css/mb_trongate.css">
</head>
<body>
<div class="container">
  <h1>Here is a headline</h1>
  <h2>This is a sub headline that uses the h2 tag</h2>
  <h3>Here's an example of h3 tags in action</h3>
  <h4>Here's an h4 tag</h4>
  <p>Here's the kind of font that gets produced with paragraph tags.</p>
  <p><i>Here's an example of some italic text.</i></p>
  <p><b><i>Here is some bold text.</b></p>
  <p><b>This text is bold and italic</i></b></p>

  <h1 class="text-center">Here is a Centered headline</h1>
  <p><button>Button</button></p>
  <p><button class="alt">Alt Button</button>
  <button class="float-right">R Button</button><button class="alt">Alt Button</button></p>

  <a href="https://trongate.io">Here's an ordinary text link</a>
  <a href="https://trongate.io" class="button">This link looks like a button</a>
  <a href="https://trongate.io" class="button alt">This link looks like an alternative button</a>

  <p>
    <button>Normal Button</button>
    <button class="alt">Normal Button</button>
  </p>
  <p class="smaller">
      <button>Smaller Button</button>
      <button class="alt">Smaller Button</button>
  </p>
  <p class="large">
      <button>Large Button</button>
      <button class="alt">Large Button</button>
  </p>

  <p>
      <button class="danger">Red Button</button>
      <button class="gold">Gold Button</button>
  </p>
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

  <table>
      <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email Address</th>
          <th>City</th>
      </tr>
      <tr>
          <td>Eric</td>
          <td>Clapton</td>
          <td>eric@example.com</td>
          <td>London</td>
      </tr>
      <tr>
          <td>Lou</td>
          <td>Reed</td>
          <td>lou@example.com</td>
          <td>New York</td>
      </tr>
      <tr>
          <td>Kate</td>
          <td>Bush</td>
          <td>kate@example.com</td>
          <td>Maidstone</td>
      </tr>
  </table>
</div>

</body>
</html>
