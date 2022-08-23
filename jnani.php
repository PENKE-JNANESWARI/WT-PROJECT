<!doctype html>
<html lang ="en">
    <head>
        <meta charset="utf-08">
        <meta name ="viewport" content="width= device width initial-scale=1";>
        <title>query mode</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> 
        <style>
            .container{
                margin-top: 100px;
            }
            input[type='submit']{
                background-color: rgb(0, 113, 128);
                color: white;
                width: 100px;
                height: 40px;
                font-size: 20px;
            }
            input[type='submit']:hover{
                opacity: 0.8;
                box-shadow: 0px 0px 10px rgb(0, 242, 177);
            }
            body{
                background-color:wheat;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <form action="jnani1.html">
                <center>
            <label>Subjects</label>
                        <select>
                            <option>Web Technologies</option>
                            <option>DATABASE</option>
                            <option>COMPILER DESIGN</option>
                            <option>MACHINE LEARNING</option>
                            <option>DATA SCIENCE</option>
                        </select><br><br>
                        <textarea rows="13" cols="80"> </textarea><br><br>
                        <textarea rows="6" cols="25"name="question"> Enter your question here...</textarea><br><br>
                        <input type="submit" value="Submit">
                    </center>
            
            </form>
            
        </div>
