<?php

class Impresora {

	public static function printTicket($number, $queue, $espera){
            $impresora = fopen("/dev/usb/lp1", "a+");
            /* ASCII constants */
            $ESC = "\x1b";
            $GS = "\x1d";
            $NUL = "\x00";
            /* Output an example receipt */
            fprintf ($impresora, $ESC."@"); // Reset to defaults
            fprintf ($impresora, $ESC."t\x12"); // set to Latin 2 character code table https://reference.epson-biz.com/modules/ref_charcode_en/index.php?content_id=28
            //echo ESC."E1"; // Bold
            fprintf ($impresora, $ESC."a".chr(1)); // Centered printing
            fprintf ($impresora, "Bienvenido a\n");
            fprintf ($impresora, $GS."!\x11"); // Set the character size
            fprintf ($impresora, "FARMACENTRO\n");
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $GS."!\x00"); // Set the character size
            fprintf ($impresora, "su n\xa3mero de atenci\xa2n es\n");
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."E".chr(1)); // Bold
            fprintf ($impresora, $GS."!\x33"); // Set the character size
            fprintf ($impresora, $number . ""); // Número de turno
            //fprintf ($impresora, $GS."!\x11"); // Set the character size
            fprintf ($impresora, $queue . "\n");
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."E".chr(0)); // Not Bold
            //echo ESC."d".chr(1); // Blank line
            fprintf ($impresora, $GS."!\x00"); // Set the character size
            ($espera == 0) ? fprintf ($impresora, "Clientes en espera: 0\n") : fprintf ($impresora, "Clientes en espera: $espera\n");
            fprintf ($impresora, "Emisi\xa2n: " . date('d/m/Y h:i:s a', time()) . "\n");
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $GS."!\x00"); // Set the character size
            fprintf ($impresora, $ESC."E".chr(1)); // Bold
            fprintf ($impresora, "GRACIAS POR ELEGIRNOS!!!");
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."a".chr(0) ); // Cancel centered printing
            fprintf ($impresora, $ESC."E".chr(0)); // Not Bold
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $GS."V\x30"); 
	}
        
        public static function printCode($id, $nombre){
            $impresora = fopen("/dev/usb/lp0", "a+");
            $ESC = "\x1b";
            $GS = "\x1d";
            $NUL = "\x00";
            fprintf ($impresora, $ESC."@"); // Reset to defaults
            fprintf ($impresora, $ESC."t\x12"); 
            fprintf ($impresora, $ESC."a".chr(1)); // Centered printing
            fprintf ($impresora, $GS."!\x11"); // Set the character size
            fprintf ($impresora, $nombre);
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $GS."!\x33"); // Set the character size
            fprintf ($impresora, $id);
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."a".chr(0) ); // Cancel centered printing
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $ESC."d".chr(1)); // Blank line
            fprintf ($impresora, $GS."V\x30"); 
            //fclose($impresora);
	}
}
?>
