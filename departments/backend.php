<?php
$depts["list"] = array(
    array(
        "category" => "간호계열",
        "depts" => [
            array("url" => "https://nursing.ansan.ac.kr/nursing", "name" => "간호학과")
        ]
    ),
    array(
        "category" => "보건계열",
        "depts" => [
            array("url" => "https://pathology.ansan.ac.kr/pathology", "name" => "임상병리학과"),
            array("url" => "https://radi.ansan.ac.kr/radi", "name" => "방사선학과"),
            array("url" => "https://physi.ansan.ac.kr/physi", "name" => "물리치료학과")
        ]
    ),
    array(
        "category" => "컴퓨터계열",
        "depts" => [
            array("url" => "https://info.ansan.ac.kr/info", "name" => "컴퓨터정보학과"),
            array("url" => "https://aisw.ansan.ac.kr/aisw", "name" => "인공지능소프트웨어학과"),
            array("url" => "https://elect.ansan.ac.kr/elect", "name" => "디지털정보통신과"),
            array("url" => "https://aiweb.ansan.ac.kr/aiweb", "name" => "AI웹서비스과")
        ]
    ),
    array(
        "category" => "자율계열",
        "depts" => [
            array("url" => "https://cls.ansan.ac.kr/cls", "name" => "자율전공학과"),
        ]
    ),
);

echo json_encode($depts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>