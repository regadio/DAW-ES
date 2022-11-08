from django.shortcuts import render
from django.http import HttpResponse, JsonResponse

from .models import Tpelicula
from .models import Tcomentario
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

def devolver_pelicula_por_id(request, id_solicitado):
	pelicula = Tpelicula.objects.get(id_pelicula = id_solicitado)
	comentarios = pelicula.tcomentario_set.all()
	lista_comentarios = []
	for fila_comentario_sql in comentarios:
		diccionario = {}
		diccionario['id_comentario'] = fila_comentario_sql.id_comentario
		diccionario['comentario'] = fila_comentario_sql.comentario
		lista_comentarios.append(diccionario)
	resultado = {
		'id_pelicula': pelicula.id_pelicula,
		'nombre': pelicula.nombre,
		'url_imagen': pelicula.url_imagen,
		'publicaación': pelicula.publicaación,
		'comentario': lista_comentarios
	}
	return JsonResponse(resultado, json_dumps_params={'ensure_ascii': False})