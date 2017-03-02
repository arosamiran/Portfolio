<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Angelo Rosamiran">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/svg" href="images/doodlr.ico">
	<link rel="stylesheet" type="text/css" href="css/works.css">
	<title>Works: Embedded Systems</title>
</head>
<body>
	<article>
		<div>
			<span class="title">Embedded Systems</span>
		</div>
		<div>
			<h3 class="header">RFID-Controlled Doorlock</h3>

			<p class="text">
				During our junior year we were tasked to create (as project in one of our subjects) something that incorporates an Internet of Things (IoT) device. We came up with an RFID-controlled doorlock using arduino technology.</p>

			<p class="text">
				Arduino features a microcontroller capable of making decisions based on the user's input. And of course those desicions are based on the logic of the program. If you want to learn more about how to program an Arduino, you can visit this <a class="link" href="#">link</a>.
			</p>

			<div>
				<img src="atmel.jpg" alt="The ATMEL328">
				<figcaption class="caption">The ATMEL328</figcaption>
			</div>

			<p class="text">
				At the heart of every Arduino is an ATMEL 168/328 - an integrated circuit (IC) where you upload your program and it then controls (thus it is often reffered to as a microcontroller) how the Arduino reacts to its environment or the user's input. The model number represents the memory of the IC, 168 for 10KB and 328 for the 32KB version.
			</p>

			<p class="text">
				So, our project is composed of three main parts: the controller, the reader and a solenoid. The controller is the Arduino and the reader, an RFID  reader we've bought at <a href="#">E-Gizmo</a>.The reader is then composed of a coil - which is The Reader - and a card - the one to be read.
			</p>

			<p class="text">
				The solenoid is a doorlock that the Arduino controlls - to give access or make the door open-able or not.
			</p>

			<h4 class="text">How does it work?</h4>

			<p class="text">The project works like this:</p>
			<ul class="text">
				<li>A user taps his RFID card,</li>
				<li>The reader...reads the card - it contains a serial number,</li>
				<li>The serial is then passed to the Arduino and</li>
				<li>The Arduino compares the serial number to the serial number coded to it then decides wether the solenoid lock should be open-abe or not.</li>
			</ul>

			<p class="text">
				Sounds simple huh? But there's a twist to our project.
			</p>

			<p class="text">
				We are not allowed to use an Arduino. I mean, we have to make our own.
			</p>

			<p class="text">
				Fortunately, I've documented the project pretty well. You can find the codes in this <a href="#" class="link">repository</a> and a demo of how the project works below.
			</p>

			<table>
				<caption>Gallery</caption>
				
				<tr>
					<td>Column 1, Row 1</td>
					<td>Column 2, Row 1</td>
				</tr>
				<tr>
					<td>Column 1, Row 2</td>
					<td>Column 2, Row 2</td>
				</tr>
				<tr></tr>
			</table>

				<!-- Next work -->
			<h3 class="header">Digital Clock</h3>

			<p class="text">
				In our senior year we had a project to create a digital clock using only TTL (transistor-transistor logic) integrated circuits.
			</p>

			<p class="text">
				You know how digital clocks work. It's just that, after I've done one with this project I've realized that making one is difficult.
			</p>

			<?php require 'shared/back_btn.php'; ?>
		</div>
	</article>
</body>
</html>