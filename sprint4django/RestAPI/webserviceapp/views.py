from django.shortcuts import render
from djanfo.http import HttpResponse

def pagina_de_prueba(request):
	return HttpResponse("<h1>Hola caracola</h1>");
# Create your views here.
