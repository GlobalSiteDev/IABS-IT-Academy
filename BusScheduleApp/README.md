The web app contains 2 links “Drive from Primiske” and “Drive from Bogdana”
Each link sends a GET parameter to the server. In the first case, “from=primiske”, and in the second, “from=bogdana”. For example, the link for a trip from "Bogdana" bus stop looks like: “index.php?from = bogdana”
When the server receives one of the two possible GET parameters, the app takes the current time
Based on the current time and the entered value, the program in the required csv file searches for the desired string and shows it to the user.
If the program does not receive the necessary files, it simply displays two links
Make a feedback form. The form is consisting of fields: your name, email and message text. Save to csv file all entered in the form data
