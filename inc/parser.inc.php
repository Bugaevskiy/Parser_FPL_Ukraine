<?php
//Массивы для хранения полученной инфы
$teams = array();
$links_for_teams_preview = array();
$last_tour_results = array();

//Получаем контент требуемой страницы
$html = file_get_html("http://dynamo.kiev.ua/comp/ukraine/table/");

//Ищем названия клубов + общее количество очков.Сохраняем в массив
foreach($html->find("tbody tr") as $tr){
    //Текущие очки
    $point = $tr->find("td",7)->plaintext;
    //Название клуба
    foreach($tr->find(".table-championship__link strong") as $i){
        $teams[transliterate($i->plaintext)]["name"] = $i->plaintext;
        $teams[transliterate($i->plaintext)]["point"] = $point;
    }
}
//Ищем превью.Сохраняем файлы и ссылки.
foreach($html->find(".table-championship__img img") as $i){
    $path = "img/".transliterate($i->alt).".png";
    $url = "http://dynamo.kiev.ua/".$i->src;
    file_put_contents($path, file_get_contents($url));
    $links_for_teams_preview[transliterate($i->alt)] = $path;
}
//Результаты последнего тура
for($i=0;$i<7;$i++){
    //Парсим "хозяев","гостей" и итоговый счет.
    $master = $html->find(".tour ul li .left strong",$i);
    $guest = $html->find(".tour ul li .right strong",$i);
    $count = $html->find(".tour ul li .count",$i);
    $last_tour_results[$i]["master"]=transliterate($master->plaintext);
    $last_tour_results[$i]["guest"]=transliterate($guest->plaintext);
    $last_tour_results[$i]["count"]=trim($count->plaintext);

}

//Очищаем память
$html->clear();
unset($html);