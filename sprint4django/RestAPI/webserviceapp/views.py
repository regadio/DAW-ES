from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from .models import Tpelicula

# Create your views here.
def pagina_de_prueba(request):
	return HttpResponse("<h1>Hola caracola</h1>");

def devolver_peliculas(request):
	lista = Tpelicula.objects.all()
	respuesta_final = []
	for fila_sql in lista:
		diccionario = {}
		diccionario['id_pelicula'] = fila_sql.id_pelicula
		diccionario['nombre'] = fila_sql.nombre
		diccionario['url_imagen'] = fila_sql.url_imagen
		diccionario['publicaación'] = fila_sql.publicaación
		respuesta_final.append(diccionario)
	return JsonResponse(respuesta_final, safe=False) 
