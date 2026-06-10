#! /usr/local/bin/perl
##############################################################################
# Basic Random Image Displayer  Version 1.2                                  # 
# Copyright 1996 Matt Wright    mattw@scriptarchive.com                      #
# Created 7/1/95                Last Modified 7/20/95                        #
# Scripts Archive at:           http://www.scriptarchive.com/                #
##############################################################################
# COPYRIGHT NOTICE                                                           #
# Copyright 1996 Matthew M. Wright  All Rights Reserved.                     #
#                                                                            #
# Basic Random Image may be used and modified free of charge by anyone so    #
# long as this copyright notice and the comments above remain intact.  By    #
# using this this code you agree to indemnify Matthew M. Wright from any     #
# liability that might arise from it's use.                                  #  
#                                                                            #
# Selling the code for this program without prior written consent is         #
# expressly forbidden.  In other words, please ask first before you try and  #
# make money off of my program.                                              #
#                                                                            #
# Obtain permission before redistributing this software over the Internet or #
# in any other medium.  In all cases copyright and header must remain intact.#
##############################################################################
# Necessary Variables
  $basedir = "http://www.scruffian.com/news/random/";
  
@files = (
"1.jpg",
"2.jpg",
"3.jpg",
"4.jpg",
"5.jpg",
"6.jpg",
"7.jpg",
"8.jpg",
"9.jpg",
"10.jpg",
"11.jpg",
"12.jpg",
"13.jpg",
"14.jpg",
"15.jpg",
"16.jpg",
"17.jpg",
"18.jpg",
"19.jpg",
"20.jpg",
);

# Options
  $uselog = 0; # 1 = YES; 0 = NO
        $logfile = "/home/mattw/public_html/image/pics/piclog";

# Done
##############################################################################

srand(time ^ $$);
$num = rand(@files); # Pick a Random Number

# Print Out Header With Random Filename and Base Directory
print "Location: $basedir$files[$num]\n\n";

# Log Image
if ($uselog eq '1') {
    open (LOG, ">>$logfile");
    print LOG "$files[$num]\n";
    close (LOG);
}
