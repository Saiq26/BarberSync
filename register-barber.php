<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BarberSync Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>

<body
    style="background-image: url('assets/barbershop.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 100vh; margin: 0;">
    <nav class="navbar">
        <div class="logo">BarberSync</div>
        <ul class="nav-links">
            <li><a href="welcome.html">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </nav>

    <div class="welcome-container">
    <div class="welcome-message">
    <h1><i class="fas fa-user-plus"></i> Register</h1>
        <form id="courseForm" method="post" action="conn.php">
            <!-- <div class="form-group">
                <label for="cName"><i class="fas fa-book"></i> Course Name</label>
                <select id="cName" name="cName" onchange="updateCourseCode()">
                    <option value="" disabled selected>Select Course Name</option>
                    <option value="ST113">Basic Statistics</option>
                    <option value="AC100">Principles of Accounting I</option>
                    <option value="CS174">Programming in C</option>
                    <option value="MK100">Introduction to Business</option>
                    <option value="FN100">Principles of Microeconomics Analysis</option>
                    <option value="DS112">Development Perspectives I</option>
                    <option value="CS173">Business Computer Communication</option>
                    <option value="IS171">Introduction to Computer Networks</option>
                    <option value="ST114">Probability Theory I</option>
                    <option value="IS181">Web Programming</option>
                    <option value="FN101">Principles of Macroeconomics Analysis</option>
                    <option value="GM100">Principles and Practice of Management	</option>
                    <option value="DS113">Development Perspectives II</option>
                     Add more courses as needed -->
                <!-- </select> 
                <span id="cName-error" class="error-message"></span>
            </div> -->
            <div class="form-group">
                <label for="cName"><i class="fas fa-book"></i> Course Name</label>
                <input type="text" id="cName" name="cName" placeholder="e.g., Web Programming">
            </div>

            <div class="form-group">
                <label for="cCode"><i class="fas fa-code"></i> Course Code</label>
                <input type="text" id="cCode" name="cCode" placeholder="e.g., IS181">
            </div>

            <div class="form-group">
                <label for="cDesc"><i class="fas fa-info-circle"></i> Brief Course Description</label>
                <textarea id="cDesc" name="cDesc" rows="3"></textarea>
                <span id="cDesc-error" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="dept"><i class="fas fa-building"></i> Department Offering</label>
                <select id="dept" name="dept">
                    <option value="" disabled selected>Select Department</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Math">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Art">Art</option>
                    <option value="Health">Health</option>
                    <option value="Music">Music</option>
                    <option value="Engineering">Engineering</option>
                    <option value="Accounting">Accounting</option>
                    <option value="Economics">Economics</option>
                    <option value="Geography">Geography</option>
                    <option value="History">History</option>
                    <option value="Education">Education</option>
                    <option value="Psychology">Psychology</option>
                    <option value="Anthropology">Anthropology</option>
                    <option value="Biostatistics">Biostatistics</option>
                    <option value="Communication">Communication</option>
                    <option value="Humanities">Humannities</option>
                    <option value="Law">Law</option>
                    <option value="Medicine">Medicine</option>
                    <option value="Nursing">Nursing</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Political Science">Political Science</option>
                    <option value="Social Science">Social Science</option>
                    
                    <!-- Add more departments as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="sem"><i class="fas fa-calendar-alt"></i> Semester</label>
                <select id="sem" name="sem">
                    <option value="" disabled selected>Select Semester</option>
                    <option value="1">First</option>
                    <option value="2">Second</option>
                    <option value="3">Third</option>
                    <option value="4">Fourth</option>
                    <option value="5">Fifth</option>
                    <option value="6">Sixth</option>
                    <option value="7">Seventh</option>
                    <option value="8">Eighth</option>
                    <option value="9">Nineth</option>
                    <option value="10">Tenth</option>
                </select>
            </div>

            <div class="form-group">
                <label for="aYear"><i class="fas fa-calendar"></i> Academic Year</label>
                <select id="aYear" name="aYear">
                    <option value="" disabled selected>Select Academic Year</option>
                    <option value="2023-2024">2023-2024</option>
                    <option value="2022-2023">2022-2023</option>
                    <option value="2021-2022">2021-2022</option>
                    <option value="2020-2021">2020-2021</option>
                    <option value="2019-2020">2019-2020</option>
                    <option value="2018-2019">2018-2019</option>
                    <option value="2017-2018">2017-2018</option>
                    <option value="2016-2017">2016-2017</option>
                    <option value="2015-2016">2015-2016</option>
                    <option value="2014-2015">2014-2015</option>
                    <option value="2013-2014">2013-2014</option>

                </select>
            </div>

            <div class="form-group">
                <label for="instructor"><i class="fas fa-user"></i> Instructor Name</label>
                <input type="text" id="instructor" name="instructor" placeholder="Enter Instructor Name">
                <span id="instructor-error" class="error-message"></span>
            </div>

            <div class="form-group">
                <label for="grade"><i class="fas fa-graduation-cap"></i> Grade</label>
                <select id="grade" name="grade">
                    <option value="" disabled selected>Select Grade</option>
                    <option value="A">A</option>
                    <option value="A+">A+</option>
                    <option value="B">B</option>
                    <option value="B+">B+</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                    <option value="F">F</option>
                </select>
                <!-- <input type="text" id="grade" name="grade" placeholder="Enter your Grade"> -->
                <span id="grade-error" class="error-message"></span> 
            </div>

            <button type="submit"><i class="fas fa-paper-plane"></i> Submit</button><br>

        </form>
    </div>
    </div>
</body>
</html>