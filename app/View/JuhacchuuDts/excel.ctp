<?php
// Excel出力用ライブラリ
App::import('Vendor', 'PHPExcel', array('file'=>'phpexcel' . DS . 'PHPExcel.php'));
App::import('Vendor', 'PHPExcel_IOFactory', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'IOFactory.php'));
App::import('Vendor', 'PHPExcel_Cell_AdvancedValueBinder', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Cell' . DS . 'AdvancedValueBinder.php'));
 
// Excel95用ライブラリ
App::import('Vendor', 'PHPExcel_Writer_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Writer' . DS . 'Excel5.php'));
App::import('Vendor', 'PHPExcel_Reader_Excel5', array('file'=>'phpexcel' . DS . 'PHPExcel' . DS . 'Reader' . DS . 'Excel5.php'));

//PHPExcelオブジェクトの作成
//新規の場合
//$PHPExcel = new PHPExcel();
 
//テンプレートの読み込み
$objReader = PHPExcel_IOFactory::createReader("Excel5");
//テンプレートファイルフルパス
$template = realpath(TMP);
$template .= DS . 'excel' . DS;
$template_path = $template . "template.xls";
$PHPExcel = $objReader->load($template_path);

//表紙への入力
//シートの設定
$PHPExcel->setActiveSheetIndex(0);  //0はsheet1(一番左のシート)
$sheet = $PHPExcel->getActiveSheet();
$sheet->setCellValue('AV2', '123');//$data['JuhacchuuDt']['id']); 

// Excelファイルの保存 ------------------------------------------  

//保存ファイル名
$filename = "output.xls";

// 保存ファイルパス
$upload = realpath( TMP );
$upload .= DS . 'excel' . DS;
$path = $upload . $filename;

$objWriter = new PHPExcel_Writer_Excel5( $PHPExcel );   //2003形式で保存
$objWriter->save( $path );

// Excelファイルをクライアントに出力 ----------------------------
//保存をしてから出力
Configure::write('debug', 0);       // debugコードを非表示
//header("Content-disposition: attachment; filename={$filename}");  
//header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet; name={$filename}");  
  
//$result = file_get_contents( $path );   // ダウンロードするデータの取得  
//print( $result );                       // 出力  
header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename={$filename}");
readfile( $path );
