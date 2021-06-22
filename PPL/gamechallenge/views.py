from django.shortcuts import render, redirect
from django.http import HttpResponse
import datetime
from django.contrib.auth.decorators import login_required
from django.contrib import messages
from django.contrib.auth.forms import UserCreationForm
from gamechallenge.models import User, Challenge
# from django.core.mail import EmailMessage
from django.conf import settings
from django.template.loader import render_to_string
from gamechallenge.forms import FormChallenge
from django.contrib.auth.models import User, Group
from .decorators import unauthenticated_user, allowed_users, admin_only

@unauthenticated_user
def signup(request):
    if request.POST:
        form = UserCreationForm(request.POST)
        # email = EmailMessage(
        #     'Hey buddy',
        #     'Hows is your day',
        #     settings.EMAIL_HOST_USER,
        #     ['ramareksotinoyo@gmail.com']
        #     )
        if form.is_valid():
            user = form.save()
            group = Group.objects.get(name='user')
            user.groups.add(group)
            messages.success(request, "User berhasil dibuat!")
            # email.fail_silently=False
            # email.send()
            return redirect('signup')
        else:
            messages.error(request, "Terjadi kesalahan!")
            return redirect('signup')
    else:
        form = UserCreationForm()
        konteks = {
            'form':form,
        }
    return render(request, 'signup.html', konteks)

def current_datetime(request):
    now = datetime.datetime.now()
    html = "<html><body>It is now %s.</body></html>" % now
    return HttpResponse(html)

def index(request):
    return render(request, 'index.html')

# @allowed_users(allowed_roles=['admin'])
def home(request):
    challenge = Challenge.objects.all()
    total=challenge.count()
    context={
        'challenges':challenge,
        'total':total
    }
    return render(request, 'home.html', context)

def jadwal(request):
    return render(request, 'jadwal.html')

def peringkat(request):
    users=User.objects.all()
    context={
        'users':users
    }
    return render(request, 'peringkat.html', context)

def berita(request):
    return render(request, 'berita.html')

@unauthenticated_user
def login(request):
    return render(request, 'login.html') 

@login_required(login_url=settings.LOGIN_URL)
def uploadGame(request):
    return render(request, 'uploadGame.html')

@login_required(login_url=settings.LOGIN_URL)
def uploadChallenge(request):
    if request.POST:
        form = FormChallenge(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            form = FormChallenge()
            pesan = "Data berhasil disimpan"

            context = {
                'form': form,
                'pesan': pesan,
            }
            return render(request, 'upload-challenge.html', context)
    else:
        form=FormChallenge()
        context={
            'form':form,
        }
    return render(request, 'upload-challenge.html', context)

@login_required(login_url=settings.LOGIN_URL)
def tambahChallenge(request):
    if request.POST:
        form = FormChallenge(request.POST, request.FILES)
        if form.is_valid():
            form.save()
            form = FormChallenge()
            pesan = "Data berhasil disimpan"

            context = {
                'form': form,
                'pesan': pesan,
            }
            return render(request, 'tambah-challenge.html', context)
    else:
        form = FormChallenge()

        context = {
            'form': form,
        }

    return render(request, 'tambah-challenge.html', context)

# Create your views here.
