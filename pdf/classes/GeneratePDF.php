<?php


namespace Classes;

if(!defined('ACCESSCHECK')){
	die('direct access not permitted');
}

use mikehaertl\pdftk\Pdf;


class GeneratePDF{

	public function generate($data)
	{
		$filename = 'pdf_' . rand(2000, 1200000) . '.pdf';

		$pdf = new Pdf('./test.pdf');
		$pdf->fillForm($data)
		->flatten()
		->saveAs('./completed/' . $filename);

		return $filename;
	}

}

?>