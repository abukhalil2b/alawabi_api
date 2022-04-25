<div id="dialog-container">
	<div class="dialog">
		<center>هل متأكد تريد الحذف</center>
		<div class="flex justify-around mt-5">
			<div onclick="ok()">موافق</div>
			<div onclick="cancel()" style="color:blue">إلغاء</div>
		</div>
	</div>
</div>

<script>
	var deleteUrl = '';
	var confirmDelete = (url)=>{
		deleteUrl = url;
		showDialog()
	}

	var ok = ()=>{
		hideDialog()
		window.location.replace(deleteUrl);
	}

	var cancel = ()=>{
		hideDialog()
	}

	var showDialog = ()=>{
		document.querySelector('#dialog-container')
		.style.display='block';
		
	}

	var hideDialog = ()=>{
		document.querySelector('#dialog-container')
		.style.display='none';
	}
</script>

<style>
	#dialog-container{
	display: none;
	left: 0;
    right: 0;
    top: 0;
    position: fixed;
    z-index: 10;
    width: 100%;
    height: 100%;
    background-color: #1b18185e;
	}
	.dialog{
	border: 1px solid #ccc;
    border-radius: 4px;
    box-shadow: 0px 0px 200px 10px beige;
    width: 80%;
    height: 130px;
    margin: 20% auto;
    background-color: white;
    padding: 1%;
    color: red;
	font-weight: bold;
	font-size: 18px;
	}
</style>