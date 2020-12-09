<script language="javascript" src="utils.js"></script>
<link href="ortsdatenbank.css" rel="stylesheet" type="text/css">

<table width="550" border="0" cellpadding="0" cellspacing="0" bgcolor="#00659C">
  <tr>
    <td align="center" bgcolor="#0E89ED">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#0E89ED">
        <tr>
          <td align="right" valign="bottom" nowrap > <a href="index.php?LANG=<?=@$LANG?>" class="header_title"> </a><a class="header_title" href="index.php?LANG=<?=@$LANG?>"> </a>
              <table width="100%" height="50" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="618" align="left" valign="bottom"><a class="header_title" href="index.php?LANG=<?=@$LANG?>"> </a><a href="index.php?LANG=<?=@$LANG?>" class="header_title"> </a><a href="index.php?LANG=<?=@$LANG?>" class="header_title"> &nbsp;&nbsp;
                        <?=$_titel_index_1?>
                  </a></td>
                  <td width="163" rowspan="2" align="right" valign="top"><a href="<? echo getLanguageLink($HTTP_SERVER_VARS['QUERY_STRING'],$HTTP_SERVER_VARS['PHP_SELF']);  ?>LANG=eng" class="<?= getLanguageStil("eng",$LANG);?>">eng</a> <span class="LanguageLink"> </span> <a href="<? echo getLanguageLink($HTTP_SERVER_VARS['QUERY_STRING'],$HTTP_SERVER_VARS['PHP_SELF']);  ?>LANG=rus" class="<?= getLanguageStil("rus",$LANG);?>">rus</a> <span class="LanguageLink"> </span> <a href="<? echo getLanguageLink($HTTP_SERVER_VARS['QUERY_STRING'],$HTTP_SERVER_VARS['PHP_SELF']);  ?>LANG=ger" class="<?= getLanguageStil("ger",$LANG);?>">deu</a> &nbsp;<a href="index.php?LANG=<?=@$LANG?>" class="header_link1"> </a></td>
                </tr>
                <tr>
                  <td width="618" align="left" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="header_title2" href="index.php?LANG=<?=@$LANG?>">
                    <?=$_titel_index_2?>
                  </a></td>
                </tr>
            </table></td>
        </tr>
    </table></td>
  </tr>
  <tr>
    <td align="right" bgcolor="#0277BD"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="1" align="left"><img src="bilder/spacer.gif" width="400" height="1"></td>
      </tr>
      <tr>
        <td height="20" align="left" class="header_link1">&nbsp; | &nbsp;<a href="index.php?LANG=<?=@$LANG?>" class="header_link1"> <?=$_home ?>
        </a>&nbsp; | &nbsp;<a href="suche.php?LANG=<?=@$LANG?>" class="header_link1">
        <?=$_headline_suche ?>
        </a>&nbsp; | &nbsp;<a href="neue_trampstelle.php?LANG=<?=@$LANG?>" class="header_link1">
        <?=$_neuer_eintrag?></a> |  </td>
      </tr>
    </table>       </td>
  </tr>
</table>

