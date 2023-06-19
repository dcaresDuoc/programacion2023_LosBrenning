from django.shortcuts import render

# Create your views here.

def index (request):
    title = 'Brenning Motors'
    return render(request,'index.html',{
        'title': title
    })

def modelos (request):
    return render(request,'modelos.html')

def productos (request):
    return render(request,'productos.html')

def contacto (request):
    return render(request,'contacto.html')