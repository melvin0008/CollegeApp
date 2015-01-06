<?php

class AdminController extends BaseController {


	public function processexcel()
	{

		$destinationPath="/uploads";
		$filereceived=Input::file('file');
		$name=$filereceived->getClientOriginalName();
		if(in_array($filereceived->getMimeType(),array('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet','application/vnd.ms-excel','text/csv','application/vnd.ms-office')) !== FALSE)
		{
			$filereceived->move(public_path().$destinationPath);
			return Response::make('Success', 200);
		}
		else
		{
			return Response::make('Avatar must be image', 400);
		}

		
	}
}
