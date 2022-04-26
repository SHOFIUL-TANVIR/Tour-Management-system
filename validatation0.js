const form=document.getElementById('form');
const uname=document.getElementById('uname');
const pass=document.getElementById('pass');

form.addEventListener("submit",(e)=>{
	e.preventDefault();
	validate();
});
function validate(){
	if(uname.value=='')
	{
		setError(uname,'User name cannot be empty!');
	}
	else
	{
		setSuccess(uname);
	}
}
function setError(input,msg){
	const formcontrol=document.getElementById('form-control');
	const small=formcontrol.querySelector('small');
	const itag=document.getElementById('error');
	
	small.innerText=msg;
	itag.style.visibility="visible";
	small.style.visibility="visible";
	itag.style.color="red";
	input.style.borderColor="red";
}
function setSuccess(input){
	const formcontrol=document.getElementById('form-control');
	//const small=formcontrol.querySelector('small');
	const itag=document.getElementById('success');
	
	//small.innerText=msg;
	itag.style.visibility="visible";
	//small.style.visibility="visible";
	itag.style.color="green";
	input.style.borderColor="green";
}