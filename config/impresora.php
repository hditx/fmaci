<?php

class ESCPOS {
	
	public static function printTicket($number, $queue){
		/* ASCII constants */
		$ESC = "\x1b";
		$GS = "\x1d";
		$NUL = "\x00";
		/* Output an example receipt */
		echo $ESC."@"; // Reset to defaults

		echo $ESC."t\x12"; // set to Latin 2 character code table https://reference.epson-biz.com/modules/ref_charcode_en/index.php?content_id=28

		//echo ESC."E1"; // Bold
		echo $ESC."a".chr(1); // Centered printing
		echo "Bienvenido a\n";
		echo $GS."!\x11"; // Set the character size
		echo "FARMACENTRO\n";
		echo $ESC."d".chr(1); // Blank line
		echo $GS."!\x00"; // Set the character size
		echo "su n\xa3mero de atenci\xa2n es\n";
		echo $ESC."d".chr(1); // Blank line
		echo $ESC."E".chr(1); // Bold
		echo $GS."!\x33"; // Set the character size
		echo $number . "\n"; // Número de turno
		echo $GS."!\x11"; // Set the character size
		echo $queue . "\n";
		echo $ESC."d".chr(1); // Blank line
		echo $ESC."E".chr(0); // Not Bold
		//echo ESC."d".chr(1); // Blank line
		echo $GS."!\x00"; // Set the character size
		echo "Clientes en espera: 5\n";
		echo "Emisi\xa2n: " . date('d/m/Y h:i:s a', time()) . "\n";
		echo $ESC."d".chr(1); // Blank line
		echo $GS."!\x00"; // Set the character size
		echo $ESC."E".chr(1); // Bold
		echo "GRACIAS POR ELEGIRNOS!!!";
		echo $ESC."d".chr(1); // Blank line

		/*
		El comando GS!n 
		* (donde n es un número hexadecimal)
		* configura el tamaño de la fuente. El valor máximo
		* permitido es \x33
		* 
		* El digito correspondiente a la unidad indica la altura del caracter
		* y el dígito correspondiente a la decena indica el ancho del caracter
		*/
		/*
		echo GS."!\x30"; // Set the character size
		echo "B-15\n"; // Número de turno

		echo GS."!\x33"; // Set the character size
		echo "C-15\n"; // Número de turno
		*/

		//png2pos -a C 
		echo $ESC."a".chr(0); // Cancel centered printing
		echo $ESC."E".chr(0); // Not Bold
		echo $ESC."d".chr(1); // Blank line

		//echo "Receipt for whatever\n"; // Print text
		//echo ESC."d".chr(4); // 4 Blank lines

		/* Bar-code at the end */
		/*
		echo ESC."a".chr(1); // Centered printing
		echo GS."k".chr(4)."987654321".NUL; // Print barcode
		echo ESC."d".chr(1); // Blank line
		echo "987654321\n"; // Print number
		*/
		//echo GS."V\x41".chr(3); // Cut
		//exit(0);
	}
}
/*
ESCPOS::printTicket("A15", "PAMI");

ESCPOS::printTicket("B33", "OSDE");

ESCPOS::printTicket("C05", "PARTICULAR");
*/