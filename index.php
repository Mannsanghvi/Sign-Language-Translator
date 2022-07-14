<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet " type="text/css" href="./grid.css">
        <link rel = "stylesheet" type = "text/css" href="./styles.css">
        
        <title> SIGN LANGUAGE TRANSLATOR</title>
    </head>
    <body>
        <header>
            <div class = "row">
                <div class = "heading">
                    <h1> SIGN LANGUAGE TRANSLATOR </h1>
                 </div>
                 <div class="search-bar">
                    <form action="index.php" method="post" enctype="multipart/form-data" >
                       <label for="Speech Recognition"></label>
                       <input type="text" id="speechToText" name="search-bar" onclick="record()"  >
                        
                       <input type="submit" name="submit2" value="Submit">
                       
                       
                    </form>
                
                
                 </div>
                <div class="intro">
                    
                </div>
            </div>
        </header>
        <section class="categories">
            <h2>CATEGORIES</h2>
            <ul class="categories-showcase clearfix">
                <li>
                    <figure class="select-box general">
                        <p onclick="removeClass1()"> 
                        GENERAL</p>
                        
                    </figure>
                </li>
                <li>
                    <figure class="select-box months">
                        <p onclick="removeClass2()">
                         Months &amp; Weekdays</p>
                        
                    </figure>
                </li>
                <li>
                    <figure class="select-box places">
                        <p onclick="removeClass3()">Places</p>
                        
                    </figure>
                </li>

                
                
                
             </ul>
                    <ul class="categories-showcase clearfix">
                <li>
                    <figure class="select-box fruits">
                        <p onclick="removeClass4()">Food</p>
                        
                    </figure>
                </li>
                <li>
                    <figure class="select-box alphabets">
                        <p onclick="removeClass5()">Alphabets</p>
                        
                    </figure>
                </li>
                <li>
                    <figure class="select-box misc">
                        <p onclick="removeClass6()">Misc</p>
                        
                    </figure>
                </li>
                
                
             </ul>
        </section>
        
        <section class = "display-categories">
            <div class="removeclass">
            
            <div class = " display gen " id="gen1">
                <h2 >GENERAL</h2>
                <ul class = "list">
                    <li>Shall I help you?</li>
                    <li>I am fine</li>
                    <li>Hello</li>
                    <li>Are you hungry</li>
                    <li>mile</li>
                    <li>did you finish homework</li>
                    <li>i love to shop</li>
                    <li>i like pink colour</li>
                    <li>i am tired</li>
                    <li>take care</li>
                    <li>open the door</li>
                    <li>you are wrong</li>
                    <li>what is your name</li>
                    <li>do you have money</li>
                    <li>what is the problem</li>
                    <li>good morning</li>
                    <li>good afternoon</li>
                    <li>any questions</li>
                    <li>be careful</li>
                    <li>please call me later</li>
                    <li>sit down</li>
                    <li>i had to say something but I forgot</li>
                    <li>what is your father do</li>
                    <li>whats up</li>
                    <li>stand up</li>
                    <li>i am thinking</li>
                    <li>do you watch TV</li>
                    <li>there was traffic jam</li>
                    <li>shall we go together tommorow</li>
                    <li>i am sorry</li>
                    <li>nice to meet you</li>
                    <li>dont worry</li>
                    <li>are you angry</li>
                </ul>

                
            </div>
            <div class = " display mw" id="mw">
                <h2>Months &amp; Weekdays</h2>
                <ul class = "list">
                    <li>July</li>
                    <li>June</li>
                    <li>Wednesday</li>
                    <li>Tuesday</li>
                    <li>Thursday</li>
                    <li>May</li>
                    <li>August</li>
                    <li>december</li>
                    <li>May</li>
                    <li>what is today's date</li>
                    <li>saturday</li>
                    
                </ul>

                
            </div>
            <div class = " display pl" id="places">
                <h2>Places</h2>
                <ul class = "list">
                    <li>Mumbai</li>
                    <li>Pune</li>
                    <li>Punjab</li>
                    <li>Hyderabad</li>
                    <li>Assam</li>
                    <li>Pakistan</li>
                    <li>Police Station</li>
                    <li>karnataka</li>
                    <li>village</li>
                    <li>where is the police station</li>
                    <li>toilet</li>
                    <li>kerala</li>
                    <li>temple</li>
                    <li>i go to a theatre</li>
                    <li>where is the bathroom</li>
                    <li>ahemdabad</li>
                    <li>banglore</li>
                    <li>address</li>
                    <li>usa</li>
                    <li>banaras</li>
                    <li>church</li>
                    <li>shop</li>
                    <li>cilinic</li>
                    <li>nagpur</li>
                </ul>

                
            </div>
            <div class = " display f " id="food">
                <h2>Food</h2>
                <ul class = "list">
                    <li>Grapes</li>
                    <li> Banana</li>
                    <li>Mango</li>
                    <li>Tomato</li>
                    <li>lets go for lunch</li>
                    <li>do you want something to drink</li>
                    
                </ul>
                
                
            </div>
            <div class = " display alph " id="alphabets">
                <h2>Alphabets</h2>
                <ul class = "list">
                    <li>a</li>
                    <li>b</li>
                    <li>c</li>
                    <li>d</li>
                    
                    <li>e</li>
                    <li>f</li>
                    <li>g</li>
                    <li>h</li>
                    <li>i</li>
                    <li>j</li>
                    <li>k</li>
                    <li>l</li>
                    <li>m</li>
                    <li>n</li>
                    <li>o</li>
                    <li>p</li>
                    <li>q</li>
                    <li>r</li>
                    <li>s</li>
                    <li>t</li>
                    <li>u</li>
                    <li>v</li>
                    <li>w</li>
                    <li>x</li>
                    <li>y</li>
                    <li>z</li>
                    
                </ul>
                
                
            </div>
            <div class = " display mi " id="misc">
                <h2>Misc</h2>
                <ul class = "list">
                    <li>Krishna</li>
                    <li>Dasara</li>
                    <li>job</li>
                    <li>Hindu</li>
                    <li>Flower is beautiful</li>
                    <li>cat</li>
                    <li>christmas</li>
                    <li>good question</li>
                    <li>bridge</li>
                    <li>all</li>
                    <li>i am a clerk</li>
                    <li>sign language interpreter</li>
                    
                </ul>

                
            </div>

            <div class = "display-box">
               <?php
                if (isset($_POST['submit2'])) 
                {
                    $search = $_POST['search-bar'];

// Database Details
$host = "localhost";
$dbusername = "root";
$dbpassword = "2438";
$dbname = "ISL";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

// Check Connection
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}

//Converting Passed String to Lowercase
$search = strtolower($search);

// Creating Search Query
$query = "SELECT * FROM `ISL Convertor` WHERE `Name` = '$search'";
$result = $conn->query($query);
$row = $result->fetch_row();

echo '<img src="data:image/jpeg;base64,'.base64_encode($row[1]).'" style="width: 500px; height: 300px;"/>';
               

                }




                    ?>  
            </div>
            <div>
                <form action="download.php" method="post">
                    <label for="search-bar"></label>
                       <label for="Speech Recognition"></label>
                       <input type="text" id="speechToText" name="search-bar">
                    <input type="submit" name="downloadbutton"
                class="download_btn" value="Download" /> 
            </form>
            </div>
        </section>

		




	</body>
   <script src="script.js"></script>
</html>

