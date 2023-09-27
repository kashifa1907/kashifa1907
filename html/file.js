 function addition(n1,n2,cf){
    return cf(n1,n1+3)    
 } 
let func= (a,b)=>{
    return (a*b)-(a+b)
}
let result= addition(6,8,func)
console.log(result)