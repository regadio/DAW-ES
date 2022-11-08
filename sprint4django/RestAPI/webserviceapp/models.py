# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class Tcomentario(models.Model):
    id_comentario = models.AutoField(primary_key=True)
    comentario = models.CharField(max_length=50, blank=True, null=True)
    id_usuario = models.ForeignKey('Tusuario', models.DO_NOTHING, db_column='id_usuario', blank=True, null=True)
    id_pelicula = models.ForeignKey('Tpelicula', models.DO_NOTHING, db_column='id_pelicula', blank=True, null=True)
    fecha = models.DateTimeField(blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tcomentario'


class Tpelicula(models.Model):
    id_pelicula = models.AutoField(primary_key=True)
    nombre = models.CharField(max_length=50, blank=True, null=True)
    url_imagen = models.CharField(max_length=150, blank=True, null=True)
    publicaación = models.CharField(max_length=150, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tpelicula'


class Tusuario(models.Model):
    id_usuario = models.AutoField(primary_key=True)
    nombre = models.CharField(max_length=50, blank=True, null=True)
    apellidos = models.CharField(max_length=100, blank=True, null=True)
    email = models.CharField(unique=True, max_length=200, blank=True, null=True)
    contraseña = models.CharField(max_length=200, blank=True, null=True)

    class Meta:
        managed = False
        db_table = 'tusuario'
