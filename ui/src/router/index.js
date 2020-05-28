import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from '@/layouts/Admin'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Admin,
    redirect: 'dashboard',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboard',
        component: () => import('@/views/Dashboard'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }
      },
      {
        path: 'vehicles',
        component: () => import('@/views/Vehicles'),
        meta: {
          visible: true,
          name: 'Vehículos',
          icon: 'car',
          category: 'Menu'
        }
      },
      {
        path: 'parts',
        component: () => import('@/views/Parts'),
        meta: {
          visible: true,
          name: 'Productos',
          icon: 'archive',
          category: 'Menu'
        }
      },
      {
        path: 'companies',
        component: () => import('@/views/Companies'),
        meta: {
          visible: true,
          name: 'Empresas',
          icon: 'domain',
          category: 'Menu'
        }
      },
      {
        path: 'quotations',
        component: () => import('@/views/Quotations'),
        meta: {
          visible: true,
          name: 'Cotizaciones',
          icon: 'file-document',
          category: 'Menu'
        }
      },
      {
        path: 'imports',
        component: () => import('@/views/Imports'),
        meta: {
          visible: true,
          name: 'Importaciones',
          icon: 'airplane',
          category: 'Menu'
        }
      },
      {
        path: 'notes',
        component: () => import('@/views/Notes'),
        meta: {
          visible: true,
          name: 'Notas',
          icon: 'note',
          category: 'Menu'
        }
      },
      {
        path: 'profile',
        component: () => import('@/views/Profile'),
        meta: {
          visible: true,
          name: 'Perfil',
          icon: 'account',
          category: 'Administracion'
        }
      },
      {
        path: 'users',
        component: () => import('@/views/Users'),
        meta: {
          visible: true,
          name: 'Usuarios',
          icon: 'account-multiple',
          category: 'Administracion'
        }
      },
      {
        path: 'roles',
        component: () => import('@/views/Roles'),
        meta: {
          visible: true,
          name: 'Roles',
          icon: 'account-key'
        }
      },
      {
        path: 'settings',
        component: () => import('@/views/Settings'),
        meta: {
          visible: true,
          name: 'Opciones',
          icon: 'settings',
          category: 'Administracion'
        }
      }
    ]
  },
  {
    path: '/login',
    component: () => import('@/views/Login'),
    meta: {
      visible: false
    }
  }
]

const router = new VueRouter({
  mode: 'history',
  linkExactActiveClass: 'is-active',
  routes
})

export default router;
