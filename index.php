<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP Task-hiddenbrains</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>

<!-- <div class="jumbotron text-center">
  <h3>Php Task</h3>
  
</div> -->
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h3>Write down a program that finds total words into below string.</h3>
      <p>Input - <b>If you're not making mistakes, then you're not doing anything.</b></p>
       <pre>

        $string = "If you're not making mistakes, then you're not doing anything.";

       
        //Method 1 built in function to find total words
        echo  "Method 1 No of words : ".str_word_count($string);



        //Method 2 
        function countWords($str){

            while (substr_count($str, "  ")>0){ //function counts the number of times a substring occurs in a string
                $str = str_replace("  ", " ", $str);//replace space with none
            }
            return substr_count($str, " ")+1;
        }
        
        echo  "Method 2 No of words : ".countWords($string);
    


        //Method 3
        // returns number of words in str 
        //define global
        $OUT = 0; 
        $IN = 1;


        function countTotalWords($str) 
        { 
            global $OUT, $IN; 
            $state = $OUT; 
            $wc = 0; // word count 
            $i = 0; 
              
            // Scan all characters one by one 
            while ($i < strlen($str)) 
            { 
                // If next character is  
                // a separator, set the  
                // state as OUT 
                if ($str[$i] == " " ||  
                    $str[$i] == "\n" ||  
                    $str[$i] == "\t") 
                    $state = $OUT; 
          
                // If next character is not a  
                // word separator and state is  
                // OUT, then set the state as  
                // IN and increment word count 
                else if ($state == $OUT) 
                { 
                    $state = $IN; 
                    ++$wc; 
                } 
          
                // Move to next character 
                ++$i; 
            } 
          
            return $wc; 
        } 

        echo "Method 3 No of words : " .countTotalWords($string);

        //Method 4
          function stringInfo($string){
          $plainString = preg_replace('/[.,]/', '', $string);//reolace dot and comma
          $listOfWordsInArray =  explode(" ",$plainString);//list of words in array
          $listOfWordsInString = implode(",", $listOfWordsInArray);//convert array to string seperate into comma seperate 
          $countOfWords = count($listOfWordsInArray);
          return array(
                    'listOfWordsInArray'=>$listOfWordsInArray,
                    'countOfWords'=>$countOfWords,
                    'listOfWordsInString'=>$listOfWordsInString,
                  );
          }
          $stringInfo = stringInfo($string);
          echo "Method 4 No of words : ".$stringInfo['countOfWords']";
          echo "List of words in comma seperate : ".$stringInfo['listOfWordsInString']";
          echo "List of words in array : ".var_dump($stringInfo['listOfWordsInArray'])";


      </pre> 

     
      <?php

      /*Executable PHP code */

        $string = "If you're not making mistakes, then you're not doing anything.";

       
        //Method 1 built in function to find total words
        echo  "Method 1 No of words : ".str_word_count($string).'<br>';



        //Method 2 
        function countWords($str){

            while (substr_count($str, "  ")>0){ //function counts the number of times a substring occurs in a string
                $str = str_replace("  ", " ", $str);//replace space with none
            }
            return substr_count($str, " ")+1;
        }
        
        echo  "Method 2 No of words : ".countWords($string).'<br>';
    


        //Method 3
        // returns number of words in str 
        //define global
        $OUT = 0; 
        $IN = 1;


        function countTotalWords($str) 
        { 
            global $OUT, $IN; 
            $state = $OUT; 
            $wc = 0; // word count 
            $i = 0; 
              
            // Scan all characters one by one 
            while ($i < strlen($str)) 
            { 
                // If next character is  
                // a separator, set the  
                // state as OUT 
                if ($str[$i] == " " ||  
                    $str[$i] == "\n" ||  
                    $str[$i] == "\t") 
                    $state = $OUT; 
          
                // If next character is not a  
                // word separator and state is  
                // OUT, then set the state as  
                // IN and increment word count 
                else if ($state == $OUT) 
                { 
                    $state = $IN; 
                    ++$wc; 
                } 
          
                // Move to next character 
                ++$i; 
            } 
          
            return $wc; 
        } 

        echo "Method 3 No of words : " .countTotalWords($string)."<br>";

        //Method 4
          function stringInfo($string){
          $plainString = preg_replace('/[.,]/', '', $string);//reolace dot and comma
          $listOfWordsInArray =  explode(" ",$plainString);//list of words in array
          $listOfWordsInString = implode(",", $listOfWordsInArray);//convert array to string seperate into comma seperate 
          $countOfWords = count($listOfWordsInArray);
          return array(
                    'listOfWordsInArray'=>$listOfWordsInArray,
                    'countOfWords'=>$countOfWords,
                    'listOfWordsInString'=>$listOfWordsInString,
                  );
          }
          $stringInfo = stringInfo($string);
          echo "Method 4 No of words : ".$stringInfo['countOfWords']."<br><br><br>";
          echo "List of words in comma seperate : ".$stringInfo['listOfWordsInString']."<br><br><br>";
          //echo "List of words in array : ".var_dump($stringInfo['listOfWordsInArray'])."<br>";


      ?>
    </div>
    
  </div>
<hr>
  <div class="row">
    <div class="col-sm-12">
      <h3>Write down a recursive function that prints values that divide by 4.</h3>
      
      <pre>
         function checkDivideVal($maxNum,$divisibleVal){    
          $successValue = array();//declare array
          $n = $maxNum-1;//set number
           while ($n <= $maxNum && $n !=0) //check condition
              {
                if ($n % $divisibleVal == 0) {
                       $successValue[]= $n; //hold value
                  }
                $n--;              
              }
           return array_reverse($successValue); //reverse array
        }
        $output = checkDivideVal(21,4);//pass paramter dynamic
        $outputValues = implode(",",$output); //collect output in array format and convert into comma seprate
        echo $outputValues;
    
      </pre>
      <?php
        
        /*
        * function to find out values that divide by dynamic value
        * @maxNum = pass maximum number
        * @divisibleVal = number that divisible 
        */
        function checkDivideVal($maxNum,$divisibleVal){    
          $successValue = array();//declare array
          $n = $maxNum-1;//set number
           while ($n <= $maxNum && $n !=0) //check condition
              {
                if ($n % $divisibleVal == 0) {
                       $successValue[]= $n; //hold value
                  }
                $n--;              
              }
           return array_reverse($successValue); //reverse array
        }
        $output = checkDivideVal(21,4);//pass paramter dynamic
        $outputValues = implode(",",$output); //collect output in array format and convert into comma seprate
        echo $outputValues;
    

      ?>

    </div>
  </div>

<hr>
  <div class="row">
    <div class="col-sm-12">
      <h3>Write function that sort 2D Array on particular Key & reset array seq.</h3>
      
      <p><b>Unclear</b></p>
      <?php
        
       
        // $test[] = array("city"=>"Ahmedabad","state"=>"Gujarat");
        // $test[] = array("city"=>"Anand","state"=>"Gujarat");
        // $test[] = array("city"=>"Ankleshwar","state"=>"Gujarat");
        // $test[] = array("city"=>"Amreli","state"=>"Gujarat");
        // $test[] = array("city"=>"Ambaji","state"=>"Gujarat");
        // $test[] = array("city"=>"Gandhinagar","state"=>"Gujarat");
        // $test[] = array("city"=>"Jamnagar","state"=>"Gujarat");
      
     


      ?>

    </div>
  </div>


</div>


</body>
</html>
