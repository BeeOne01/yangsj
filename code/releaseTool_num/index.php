<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=gb2312">
		<title>Release Flash</title>
	</head>
	<style>
		input, select
		{
			width:100px;
			
		}
		li
		{
			width:250px;
		}
		li span
		{
			width:100px;
		}
	</style>
	<script language="javascript">
		function formChange()
		{
			versionNum = releaseFlash.versionNum.value;
			verlan = releaseFlash.versionLan.value;

			resultInforDiv = document.getElementById("resultInfor");


			resultInforDiv.innerHTML = "ver_" + versionNum + "_" + verlan + "&nbsp;";

		}
		
		function submitCommit()
		{
			if(releaseFlash.versionNum.value != "")
			{
				if(confirm("��ȷ��Ҫ�ύ�汾  (ver_" + versionNum + "_" + verlan + ")  ��"))
				{
					return true;
				}
				return false;
			}
			else
			{
				alert("�汾�Ų���Ϊ��");
				return false;
			}
		}
	</script>
	<body>
		<?php
			include_once("config.php");
			$curver = getCurrentVer($versionRem);
			session_start();
			$_SESSION["start"] = "start"; 
		?>
		<form name="releaseFlash" action="commitApp.php" method="post">
			<h1>Flash �汾�ύ</h1>
			<h4>��ǰ�汾��Ϊ��<?php echo $curver[0];?>, ��ǰ�汾�Ӻ�Ϊ��<?php echo $curver[1];?></h4>
			<ul>
				<li><span>�汾�ţ�</span><input name="versionNum" type="text" value="<?php echo $curver[0];?>" onKeyUp="formChange()" /></li>
				<li>
					��������:<textarea name="versionLog" style="height:150px;width:300px;"></textarea>
				</li>
			</ul>
			<div>!!�����汾��Ϊ����汾�ļ�����ͬ����<span id="resultInfor" style="color:red;"></span></div>
			<br />
			<input type="reset" value="����" onclick="{releaseFlash.reset();}" />
			<input type="submit" value="����" onclick="{return submitCommit()}" />
		</form>
	</body>
</html>
<script>
formChange();
</script>