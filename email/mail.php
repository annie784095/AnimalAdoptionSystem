<?php
  $to ="annie784095@gmail.com"; //�����
  $subject = "test"; //�H����D
  $msg = "smtp�o�H����";//�H�󤺮e
  $headers = "From: admin@your.com"; //�H���
  
  if(mail("$to", "$subject", "$msg", "$headers")):
   echo "�H��w�g�o�e���\�C";//�H�H���\�N�|��ܪ����ܰT��
  else:
   echo "�H��o�e���ѡI";//�H�H������ܪ����~�T��
  endif;
?>