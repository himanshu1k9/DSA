<?php

####### Taking input from CLI in PHP

########### Using readline() ############
# By this we can take inputs from CLI
# In Core PHP
#
#########################################

$name = readline("Enter your name: ");
$email = readline("Enter email: ");

echo "Hi $name your email is $email. \n";

########### Using fgets() ####################################
# By this we can take inputs from CLI
# In Core PHP
# By this not wait for other value it jumps to the next one
##############################################################
echo "Enter your age: ";
$age = trim(fgetc(STDIN));
echo "Enter your gender: ";
$gender = trim(fgetc(STDIN));

echo "Hi your age is $age and your gender is $gender. \n";

###### By stream_get_contents() ###########
$lines = trim(stream_get_contents(STDIN));
echo $lines . PHP_EOL;