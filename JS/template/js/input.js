function funcionCalif() {
    var calif,letra;

    calif=document.getElementById(calif).value;

    if (calif>=90) {
        letra="E"+" -> Excelente";

    }
    else if (calif>=80){
        letra="MB"+" -> Muy bien";

    }
    else if (calif>=70){
        letra="B"+" -> Bien";

    }
    else if (calif>=60){
        letra="S"+" -> Bien";

    }
    else{
        letra="NA"+"-> No Aprobado"
    }

    document.getElementById("ejCalif").innerHTML=letra;
}