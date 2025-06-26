<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h2>Student Registration Form</h2>

  <form action="create-student" method="POST">
    @csrf
    <h5>Student Information</h5>
    <div class="view-btn">
        <button><a href="display">view page</a></button>
    </div>
    <div class="name">
        <input type="text" id="first_name" name="first_name" placeholder="First Name" required>
        <input type="text" id="middle_name" name="middle_name" placeholder="Middle Name">
        <input type="text" id="last_name" name="last_name" placeholder="Last Name" required>
    </div>
    <div class="dob-row">
        <input type="date" id="dob" name="dob" required>
    </div>
    <h5>Address</h5>
    <div class="single-row">
        <input type="text" id="address" name="address" placeholder="Address" required>
    </div>

    <div class="row-2">
        <input type="text" id="city" name="city" placeholder="City" required>
        <input type="text" id="state" name="state" placeholder="State" required>
    </div>
    <div class="row-2">
        <input type="text" id="country" name="country" placeholder="Country" required>
        <input type="text" id="zip" name="zip" placeholder="Zip" required>
    </div>
     <h5>Contact Information</h5>
    <div class="row-2">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="tel" name="phone" placeholder="Phone Number" required>
    </div>
     <h5>Courses</h5>
    <select id="course" name="course" required>
      <option value="">-- Select Course --</option>
      <option value="web_dev">Web Development</option>
      <option value="data_science">Data Science</option>
      <option value="ui_ux">UI/UX Design</option>
      <option value="cyber_security">Cyber Security</option>
    </select>
    <br>
    <br>    
    <button type="submit">Submit</button>

  </form>

</body>
</html>