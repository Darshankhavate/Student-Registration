    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Form</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div>
        <form action="{{ url('update/' . $data->id) }}" method="POST">
        @csrf
    <input type="hidden" name="_method" value="put"/>
    @method('put')
        <h5>Update Student Data</h5>
        <div class="name">
            <input type="text" id="first_name" name="first_name" value="{{ $data->first_name }}" placeholder="First Name" required>
            <input type="text" id="middle_name" name="middle_name" value="{{ $data->middle_name }}" placeholder="Middle Name">
            <input type="text" id="last_name" name="last_name" value="{{ $data->last_name }}" placeholder="Last Name" required>
        </div>
        <div class="dob-row">
            <input type="date" id="dob" name="dob" value="{{ $data->dob }}" required>
        </div>
        <h5>Address</h5>
        <div class="single-row">
            <input type="text" id="address" name="address" value="{{ $data->address }}"  placeholder="Address" required>
        </div>

        <div class="row-2">
            <input type="text" id="city" name="city" placeholder="City" value="{{ $data->city }}" required>
            <input type="text" id="state" name="state" placeholder="State" value="{{ $data->state }}" required>
        </div>
        <div class="row-2">
            <input type="text" id="country" name="country" placeholder="Country" value="{{ $data->country }}" required>
            <input type="text" id="zip" name="zip" placeholder="Zip" value="{{ $data->zip }}"  required>
        </div>
        <h5>Contact Information</h5>
        <div class="row-2">
            <input type="email" name="email" placeholder="E-mail" value="{{ $data->email }}" required>
            <input type="tel" name="phone" placeholder="Phone Number" value="{{ $data->phone }}" required>
        </div>
        <h5>Courses</h5>
        <select id="course" name="course" value="{{ $data->course }}" required>
        <option value="">-- Select Course --</option>
        <option value="web_dev">Web Development</option>
        <option value="data_science">Data Science</option>
        <option value="ui_ux">UI/UX Design</option>
        <option value="cyber_security">Cyber Security</option>
        </select>
        <br>
        <br>        
        <button type="submit">Update</button>
        <a href="{{ url('display') }}">Cancel</a>

    </form>
    </div>
    </body>
    </html>