<html>
    <head>
        <style>
        *{
            box-sizing: border-box;
        }
        body {
            background-image:url(https://thumbs.dreamstime.com/b/white-grey-smooth-stripes-abstract-minimal-geometric-motion-background-video-animation-ultra-hd-k-white-grey-smooth-212914279.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        form {
            padding-bottom: 16px;
            background: #d1e0e0;
            border: 1px solid #c1c1c1;
            margin-top: 2rem;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        form input {
            margin-bottom: 1rem;
            background: #fff;
            border: 1px solid #9c9c9c;
        }
        form button {
            background: lightgrey;
            padding: 0.7em;
            border: 0;
            margin: 32px;
            margin-right: 5%;
        }
        form button:hover {
            background: blue;
        }
        label {
            text-align: right;
            padding: 0.5em 1.5em 0.5em 0;
            float: left;
            width: 200px;
        }

        .form-check-inline {
            width: 100%;
            margin-bottom: 0.5px;
            float:left;
        }
        .form-control{
            width: 45%;
            float:left;
        }
        textarea {
            width: 100%;
            float: left;
        }
        button {
            width: 15%;
            margin-bottom: 0.5px;

        }
        </style>
    </head>
    <body>
            <form action="https://www.google.com/" method="get">
                <center><h1>Registration Form</h1></center>
                <div class="form-group ">
                    <label for="User id">User id:</label>
                    <input type="number" class="form-control" id="User id" placeholder="Required and must be of length 5 to 12" pattern="{5,12}"required >
                </div>
                <div class="form-group">
                    <label for="Password">Password:</label>
                    <input type="password" class="form-control" id="Password" placeholder="Required and must be of length 7 to 12" pattern="{7,12}"required >
                </div>
                <div class="form-group">
                    <label for="Name">Name:</label>
                    <input type="text" class="form-control" id="Name" placeholder="Required and alphabates only" required>
                </div>
                <div class="form-group">
                    <label for="Address">Address:</label>
                    <input type="text" class="form-control" id="Address" placeholder="Optional">
                </div>
                <div class="form-group">
                    <label for="Country">Country:</label>
                    <input list="country" name="country" placeholder="(please select a country)" required>
                    <datalist id="country">
                        <option value="Amerika">Amerika</option>
                        <option value="Inggris">Inggris</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Singapura">Singapura</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Australia">Australia</option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="ZIP Code">ZIP Code:</label>
                    <input type="number" class="form-control" id="ZIP Code" placeholder="Required. Must be numeric only" required>
                </div>
                <div class="form-group">
                    <label for="Email">Email:</label>
                    <input type="email" class="form-control" id="Email" placeholder="Required. Must be a valid email"required>
                </div>
                <div class="form-check-inline">
                    <label for="Sex">Sex:</label>
                    <input type="radio" name="sex" value="Male" required/>
                    Male</input>
                    <input type="radio" name="sex" value="Female" required />
                    Female</input>
                </div>
                <div class="form-check-inline">
                    <label  class="form-check-label" for="Language"required>Language:</label>
                    <input type="checkbox" value="English">English
                    <input type="checkbox" value="English">Non English
                </div>
                <div class="form-group">
                    <label for="About">About:</label>
                    <textarea type="text" class="form-control" id="About" placeholder="comment"style="height:200px"></textarea>
                </div>

            <center><button type="submit" class=" btn-primary">Submit</button></center>

            </form>
        </div>
    </body>
</html>
