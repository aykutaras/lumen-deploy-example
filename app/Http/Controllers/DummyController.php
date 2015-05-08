<?php namespace App\Http\Controllers;
use App\Commands\TesterCommand;
class DummyController extends Controller {
	public function dummy($name) {
		$aa = new TesterCommand;
		$this->dispatch($aa);
		return 'My Dummy Response '. $name;
	}
}
