<?php 

class Application
{
    public $appName, $appVersion, $appOs = 'Linux';

    public const APP_AUTHOR = 'Noval Ramdhani';

    // __construct adalah sebuah magic method bawaan langsung dari php dan semua magic function di php diawai dengan prefix __
    public function __construct($appName, $appVersion, $appOs)
    {
        $this->appName = $appName;
        $this->appVersion = $appVersion;
        $this->appOs = $appOs;
    }

    public function getInfoApp()
    {
        return [
            'app_class' => get_class($this),
            'app_name' => $this->appName,
            'app_version' => $this->appVersion,
            'app_os' => $this->appOs,
            'app_author' => self::APP_AUTHOR // mengakses constanta menggunakan self keyword
        ];
    }

    // Method ini akan dijalankan jika sebuah program mengakhiri baris kodenya
    public function __destruct()
    {
        echo "Program Finished";

        exit(1);
    }
}

class MiniApp extends Application
{

}

$app = new MiniApp("Belajar OOP PHP", '1.2.0', 'Linux');
var_dump($app->getInfoApp());