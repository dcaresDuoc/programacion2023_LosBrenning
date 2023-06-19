from django.urls import path
from . import views

urlpatterns = [
    path('', views.index),
    path('modelos/', views.modelos),
    path('productos/', views.productos),
    path('contacto/', views.contacto),
]