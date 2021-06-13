"""ppl URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from gamechallenge.views import *
from django.contrib.auth.views import LoginView, LogoutView
from django.conf.urls.static import static


urlpatterns = [
    path('admin/', admin.site.urls),
    path('datetime/', current_datetime),
    path('index/', index),
    path('home/', home, name='home'),
    path('jadwal/', jadwal),
    path('peringkat/', peringkat),
    path('berita/', berita),
    # path('login/', login),
    path('login/', LoginView.as_view(), name='login'),
    path('signout/', LogoutView.as_view(next_page='login'), name='signout'),
    path('signup/', signup, name='signup'),
    path('uploadGame/', uploadGame, name='uploadGame'),
    path('upload-challenge/', uploadChallenge, name='upload-challenge')
]

if settings.DEBUG:
    urlpatterns += static(settings.MEDIA_URL, document_root=settings.MEDIA_ROOT)
