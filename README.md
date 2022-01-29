## Introduction
This project will create a simple 'quizzing system' similar to the quizzes people can participate in on social media sites like Facebook. The program starts off by allowing the user to answer a series of at least 4 questions. When the user clicks a button to submit their answers their answers are sent to a PHP program to be tabulated and saved to the server. The PHP page will then display the results of the quiz in a visually appealing way.  

At any time the user can click on a hyperlink to view aggregate results for the quiz. If they click on this link a new PHP page will be loaded which will display a bar chart summary of all results that have been gathered so far.  

In addition, every time a client takes the quiz their result should be saved as a cookie on the client's computer - if they choose to come back to the page they will see their previous result. They can elect to take the quiz again which start the process over again.  

## Website Address
It has already been uploaded to my school website:   
https://i6.cims.nyu.edu/~st3890/webdev/macro07.php

## Requirements
Layout (look and feel - HTML/CSS written in a PHP document).  
index.php  
1. Some kind of header element. 
2. A form with at least 4 questions.  
3. A button to submit the form
4. A visually appealing look / feel to the page.  
5. A link to 'results.php'  

results.php.  
1. Some kind of header element.  
2. At least four bars corresponding to the four possible outcomes of your quiz. Each bar should be colored differently and contain the name of the outcome inside of the bar. Default all bars to 100% of the width of the page.  
3. A visually appealing look / feel to the page.  

Quiz Logic (HTML sending data to a PHP document to be processed).  
1. Each quiz question should default to a neutral value (i.e. 'select an answer').  
2. The user should be able to adjust their answers to the quiz using standard HTML form UI elements.  
3. Clicking on the 'submit' button should send the data to a 'processresults.php' file for processing.  
4. During the processing phase, the value of each quiz question should be analyzed. If the user misses a question the quiz should not be scored and some kind of error message should appear to the user.  
5. If each question has been successfully answered the result of the quiz can be calculated. This can be as easy as assigning a point for each answer.  
6. Save the answer to a text file on the server using file_put_contents.  
7. Set a cookie on the user's machine to keep track of their response using set_cookie.  
8. Finally, display a visually appealing representation of the user's result to them.  
9. Upon successfully filling out the quiz the form should no longer display - only the results should show up.  

Result Logic (PHP document).  
1. Create a new PHP document called 'results.php'.  
2. When this page loads it should open up the result file that was created by 'index.php' using file_get_contents.  
3. The page should tell the user the total # of quiz submissions that have been recorded so far.  
4. The page should also contain a series of 'div' elements to represent each item the user could vote for in the quiz. The width of each 'div' element should correspond to the percentage of votes that item received (i.e. in my example homer might have gotten 10%, marge 20%, bart 30% and lisa 40%).  
5. There should be a link back to the 'index.php' page to allow the user to re-vote, if desired.  
