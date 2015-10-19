<?php
//Работа с классами
//1. Сделайте класс User. Создайте в классе публичное свойство firstname и два
//публичных метода: setFirstName и getFirstName. Создайте экземпляр класса.
//Используя экземпляр и метд setName сохраните в свойство name текствое
//значение. С помощью экземпляра и метода getName получите текствое значение,
//сохраненное в свойстве name.

//2. В тот же класс User добавьте несколько свойств: lastname, email, phone. Создайте
//по два публичных метода set и get на каждое свойство по аналогии с предыдущим
//заданием.

//3. Добавьте в класс User конструктор, который принимает в качестве параметров
//firstname, lastname, email, phone. Каждое свойство сохраните с помощью й
//своефункции set... ,

//4. Добавьте в класс User метод getUserInfo. В методе должен формироваться
//массив. В качестве ключей должны быть свойства класса: firstname, lastname,
//email, phone. В качестве значений должны быть значения этих свойств. Значения
//свойств должны быть получены с помощью функций get... (getFirstName,
//getLastName и т.д.).
class User{
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $userInfo;

    public function setFirstName($f_name){
        $this->firstname = $f_name;
    }
    public function getFirstName(){
        return $this->firstname;
    }

    public function setLastName($l_name){
        $this->lastname = $l_name;
    }
    public function getLastName(){
        return $this->lastname;
    }

    public function setEmail($set_email){
        $this->email = $set_email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPhone($set_phone){
        $this->phone = $set_phone;
    }
    public function getPhone(){
        return $this->phone;
    }

    public function setUserInfo($firstname, $lastname, $email, $phone){
        $this->setFirstName($firstname);
        $this->setLastName($lastname);
        $this->setEmail($email);
        $this->setPhone($phone);
    }

    public function getUserInfo(){
        $this->userInfo = [
            'firstname' => $this->getFirstName(),
            'lastname' => $this->getLastName(),
            'email' => $this->getEmail(),
            'phone' => $this->getPhone()
        ];
        return $this->userInfo;
    }
}


//5. Сделайте класс Power, который возводит число в нужную степень (не используя
//стандартную функцию pow). Класс должен иметь следующие методы: 2, 3, 4, 5
//степени.
class Power{
    protected $number;
    public function setNumber($val){
        $this->number = $val;
    }
    public function getNumber(){
        return $this->number;
    }

    public function Power_2($number){
        $pow =  $number * $number;
        $this->setNumber($pow);
        return $this->getNumber();
    }

    public function Power_3($number){
        $pow =  $number * $number * $number;
        $this->setNumber($pow);
        return $this->getNumber();
    }

    public function Power_4($number){
        $pow =  $number * $number * $number * $number;
        $this->setNumber($pow);
        return $this->getNumber();
    }

    public function Power_5($number){
        $pow =  $number * $number * $number * $number * $number;
        $this->setNumber($pow);
        return $this->getNumber();
    }
}

//6. Сделайте класс-калькулятор. Класс должен иметь следующие методы: сложение,
//вычитание, умножение, деление. Каждый метод должен принимать параметром
//два числа.
class Calculator{
    protected $result_calc;
    public function setResultCalc($val){
        $this->result_calc = $val;
    }

    public function getResultCalc(){
        return $this->result_calc;
    }
    public function Addition($first_number, $second_number){
        $add = $first_number + $second_number;
        $this->setResultCalc($add);
        return $this->getResultCalc();
    }

    public function Subtraction($first_number, $second_number){
        $sub = $first_number - $second_number;
        $this->setResultCalc($sub);
        return $this->getResultCalc();
    }

    public function Multiplication($first_number, $second_number){
        $mult = $first_number * $second_number;
        $this->setResultCalc($mult);
        return $this->getResultCalc();
    }
// дописать обработку исключений try{} catch{}
    public function Division($first_number, $second_number){
        $div = $first_number / $second_number;
        try{
            if ($second_number == 0) {
                throw new Exception("Деление на 0");
            }
        } catch (Exception $e){
            echo $e->getMessage();
            echo $e->getFile();
            echo $e->getFile();
        }
        $this->setResultCalc($div);
        return $this->getResultCalc();
    }
}

//7. Сделайте класс Sqrt, который извлекает из числа корень нужной степени
//(используя pow: pow(4, 0.5) – это квадратный корень). Класс должен иметь
//следующие методы: корни 2, 3, 4, 5 степени.
class Sqrt{
    protected $result_sqrt;
    public function setResultSqrt($val){
        $this->result_sqrt = $val;
    }
    public function getResultSqrt(){
        return $this->result_sqrt;
    }

    public function Sqrt_2($number){
        $sqrt = pow($number, 0.5);
        $this->setResultSqrt($sqrt);
        return $this->getResultSqrt();
    }

    public function Sqrt_3($number){
        $sqrt = pow($number, 1/3);
        $this->setResultSqrt($sqrt);
        return $this->getResultSqrt();
    }

    public function Sqrt_4($number){
        $sqrt = pow($number, 0.25);
        $this->setResultSqrt($sqrt);
        return $this->getResultSqrt();
    }

    public function Sqrt_5($number){
        $sqrt = pow($number, 0.2);
        $this->setResultSqrt($sqrt);
        return $this->getResultSqrt();
    }
}


//8. Сделайте класс-оболочку над $_SERVER. Класс должен иметь следующие
//свойства: request_uri, ip, document_root, http_host, http_user_agent, query_string.

class InfoServer{
    protected $request_uri;
    protected $ip;
    protected $document_root;
    protected $http_host;
    protected $http_user_agent;
    protected $query_string;
    public function setRequestUri($val){
        $this->request_uri = $val;
    }
    public function getRequestUri(){
        return $this->request_uri;
    }
    public function setIp($val){
        $this->ip = $val;
    }
    public function getIp(){
        return $this->ip;
    }
    public function setDocumentRoot($val){
        $this->document_root = $val;
    }
    public function getDocumentRoot(){
        return $this->document_root;
    }
    public function setHttpHost($val){
        $this->http_host = $val;
    }
    public function getHttpHost(){
        return $this->http_host;
    }
    public function setHttpUserAgent($val){
        $this->http_user_agent = $val;
    }
    public function getHttpUserAgent(){
        return $this->http_user_agent;
    }
    public function setQueryString($val){
        $this->query_string = $val;
    }
    public function getQueryString(){
        return $this->query_string;
    }
    public function __construct(){
        $this->setRequestUri($_SERVER['REQUEST_URI']);
        $this->setIp($_SERVER['REMOTE_ADDR']);
        $this->setDocumentRoot($_SERVER['DOCUMENT_ROOT']);
        $this->setHttpHost($_SERVER['HTTP_HOST']);
        $this->setHttpUserAgent($_SERVER['HTTP_USER_AGENT']);
        $this->setQueryString($_SERVER['QUERY_STRING']);
    }
}

//Private and public
//9. Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор
//функций: сохранение куки, удаление куки, редактирование куки, считывание куки.
//По умолчанию кука должна устанавливаться на 1 год.

class Cookie{
    protected $cookie;
    public function setCookie($nameCookie, $value){
        setcookie($nameCookie, $value, time() + 31536000);
        $this->cookie[$nameCookie] = $_COOKIE[$nameCookie];
    }
    public function delCookie($nameCookie){
        setcookie($nameCookie, "", time() - 3600);
    }
    public function editCookie($nameCookie ,$newValue){
        setcookie($nameCookie, $newValue, time() + 31536000);
        $this->cookie = $_COOKIE[$nameCookie];
    }
    public function getCookie($nameCookie){
        return $this->cookie[$nameCookie];
    }
}

//__construct
//10. Сделайте класс-валидатор $_REQUEST, $_GET, $_POST. Класс должен иметь
//private методы обрезание пробелов del_gaps и удаление тегов del_tags (оболочку
//над стандартными) и public метод protect, который получает массив, обрабатывает
//его del_gaps и del_tags и возвращает обработанный массив. Класс должен иметь
//public свойства request, post, get, в которых хранятся соответствующие
//обработанные массивы. Обработка должна происходить при инициализации
//класса (то есть в __construct).

//class Valid{
//    public $request;
//    public $post;
//    public $get;
//
//    private function dell_gaps(){
//    }
//
//    private function dell_tags(){
//    }
//
//    public function Protect(){
//    }
//}




//11. Напишите оболочку над сессиями. Оболочка должна представлять собой набор
//функций: сохранение в сессию, считывание из сессии, удаление всех переменных
//сессии. Сессия должна стартовать в функции __construct.
class Session{
    protected $session;
    public function __construct(){
        session_start();
    }

    public function setSession($name, $value){
        $SESSION[$name] = $value;
        $this->session[$name] = $SESSION[$name];
    }

    public function getSession($name){
        return $this->session[$name];
    }

    public function cleanSession(){
        session_destroy();
        setcookie(session_name(), '');
    }
}



//Наследование
//12. Напишите класс-сумматор. Класс должен иметь следующие методы: сумма двух
//чисел, сумма квадратов двух чисел, сумма кубов двух чисел и так далее до 5-той
//степени. Класс должен наследовать методы возведения в степень от класса Power
//и иметь public методы суммирования.

class AddPow extends Power{
    protected $addPow;
    public function setAddPow($val){
        $this->addPow = $val;
    }
    public function getAddPow(){
        return $this->addPow;
    }
    public function AddPow_1($f_number, $s_number){
        $add = $f_number + $s_number;
        $this->setAddPow($add);
        return $this->getAddPow();
    }

    public function AddPow_2($f_number, $s_number){
        $add = $this->Power_2($f_number) + $this->Power_2($s_number);
        $this->setAddPow($add);
        return $this->getAddPow();
    }

    public function AddPow_3($f_number, $s_number){
        $add = $this->Power_3($f_number) + $this->Power_3($s_number);
        $this->setAddPow($add);
        return $this->getAddPow();
    }

    public function AddPow_4($f_number, $s_number){
        $add = $this->Power_4($f_number) + $this->Power_4($s_number);
        $this->setAddPow($add);
        return $this->getAddPow();
    }

    public function AddPow_5($f_number, $s_number){
        $add = $this->Power_5($f_number) + $this->Power_5($s_number);
        $this->setAddPow($add);
        return $this->getAddPow();
    }
}

//Общие
//13. Сделайте класс-оболочку над БД. Методы класса: получение из базы данных,
//вставка в базу данных, подсчет количества записей.
class Database{
    private $linc;
    protected $result;
    public function __construct(){
        $this->linc = mysqli_connect('localhost', 'root', 'root');
    }
    public function useDB($nameDB){
        mysqli_select_db($this->linc, $nameDB);
    }
    public function getQuery($query){
        $result_query = mysqli_query($this->linc, $query);
        $this->result = mysqli_fetch_array($result_query);
    }
    public function setQuery($query){
        mysqli_query($this->linc, $query);
    }
}

//14. Сделайте класс, который подключает внешние файлы к html странице, такие как
//CSS и JS. Класс должен иметь методы getCss и getJs.
class Link{
    protected $css;
    protected $js;
    public function getCss($cssUri){
        $this->css = "<link href=\"$cssUri\" rel=\"stylesheet\">";
        return $this->css;
    }
    public function getJs($jsUri){
        $this->js = "<script src=\"$jsUri\"></script>";
        return $this->js;
    }
}

//15. Сделайте класс, который добавляет тег мета на сайт (кодировка, description,keywords).
class setMetaTag{
    protected $charset;
    protected $description;
    protected $keywords;

    public function setCharset($charset){
        $this->charset = "<meta charset=\"$charset\">";
    }
    public function getCharset(){
        return $this->charset;
    }

    public function setDescription($valDescription){
        $this->description =  "<meta name=\"description\" content=\"$valDescription\">";
    }
    public function getDescription(){
        return $this->description;
    }

    public function setKeywords($keywords){
        $this->keywords = "<meta name=\"keywords\" content=\"$keywords\">";
    }
    public function getKeywords(){
        return $this->keywords;
    }

}

//16. Сделайте класс, который создает формы. Класс должен иметь следующие
//методы: создание и возвращение инпута, создание и возвращение textarea,
//создание и возвращение селекта, создание и возвращение чекбокса (вместе со
//скрытым), создание и возвращение radio. p.s. создание и возвращение - в одном методе.
class Forms{
    protected $form;
    protected $input;
    public function __destruct() {
        if($this->form) {
            echo "</form>";
        }
    }
    public function getForm($name, $method, $action) {
        echo "<form name=\"$name\" method=\"$method\" action=\"$action\"";
        $this->form = true;
    }
    public function getInputText($name) {
        $this->input = "<input name=\"$name\" type=\"text\">";
        echo $this->input;
    }
    public function getInputPswd($name) {
        $this->input = "<input name=\"$name\" type=\"password\">";
        echo $this->input;
    }
    public function getInputRadio($name, $val){
        $this->input = "<input name=\"$name\" type=\"radio\" value=\"$val\">";
        echo $this->input;
    }
    public function getInputSubmit($val) {
        $this->input = "<input type=\"submit\" value=\"$val\">";
        echo $this->input;
    }
    public function getInputCheckbox($name, $val, $hidden_val){
        $this->input = "<input name=\"$name\" type=\"checkbox\" value=\"$val\">";
        $this->input .= "<input name=\"$name\" type=\"hidden\" value=\"$hidden_val\">";
        echo $this->input;
    }
    public function getTexterea(){
        $this->input = "<textarea></textarea>";
        echo $this->input;
    }
    public function getOpenSelect($name){
        $this->input = "<select name=\"$name\">";
        echo $this->input;
    }
    public function setSelectOption($val){
        $this->input = "<option name=\"$val\">";
        echo $this->input;
    }
    public function getCloseSelect(){
        $this->input = "</select>";
        echo $this->input;
    }
}



//17. Сделайте класс, который принимает массив, а возвращает html-таблицу. Класс
//также должен принимать количество столбцов в этой таблице и сам разбивать массив нужным образом.


//18. Создать абстрактный класс User. У класса есть свойства firstname, lastname, email,
//phone. Также есть абстрактный метод getUserInfo. Также у класса есть protected
//методы: setFirstName, setLastName, setEmail, setPhone. Также необходимо
//реализовать методы get для этих же свойств.
//Создать класс Patient, который расширяет класс User и реализует метод
//getUserInfo возвращая массив из значений свойств. Свойства необходимо
//получать через реализованные методы getFirstName, getLastName и т.д.
//Данные для свойств устанавливаются через экземпляр класса Patient.
