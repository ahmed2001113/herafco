const star =document.querySelector(".stars")
const stars =document.querySelectorAll(".stars a")
let k1 =document.getElementById("k1")
let k2 =document.getElementById("k2")
let k3 =document.getElementById("k3")
let k4 =document.getElementById("k4")
stars.forEach((s,c1)=>{
    s.addEventListener("click",()=>{
star.classList.add("display");
stars.forEach((os,oi)=>{
    if(oi <= c1){
        os.classList.add("active")
    }})
k1.value=c1+1
})})

const star2 =document.querySelector(".stars2")
const stars2 =document.querySelectorAll(".stars2 a")
stars2.forEach((s,c2)=>{
    s.addEventListener("click",()=>{
star2.classList.add("display");
stars2.forEach((os,oi)=>{
    if(oi <= c2){
        os.classList.add("active")
    }})
    k2.value=c2+1
})})

const star3 =document.querySelector(".stars3")
const stars3 =document.querySelectorAll(".stars3 a")
stars3.forEach((s,c3)=>{
    s.addEventListener("click",()=>{
star3.classList.add("display");
stars3.forEach((os,oi)=>{
    if(oi <= c3){
        os.classList.add("active")
    }})
    k3.value=c3+1
})})

const star4 =document.querySelector(".stars4")
const stars4 =document.querySelectorAll(".stars4 a")
stars4.forEach((s,c4)=>{
    s.addEventListener("click",()=>{
star4.classList.add("display");
stars4.forEach((os,oi)=>{
    if(oi <= c4){
        os.classList.add("active")
    }})
    k4.value=c4+1
})})
let p =document.getElementById("p")
let b =document.getElementById("b")

let pdiv =document.getElementById("pdiv")
let bdiv =document.getElementById("bdiv")
p.addEventListener("click",()=>{
    pdiv.classList.remove("none");
    bdiv.classList.add("none")
})
b.addEventListener("click",()=>{
    bdiv.classList.remove("none");
    pdiv.classList.add("none")
})