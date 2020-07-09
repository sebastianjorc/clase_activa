import Vue from 'vue'
import VueRouter from 'vue-router'
import Admin from '@/layouts/Admin'
import AdminMasterLayout from '@/layouts/AdminMasterLayout'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: AdminMasterLayout,
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
        path: 'niveles',
        component: () => import('@/views/Niveles'),
        meta: {
          visible: true,
          name: 'Niveles',
          icon: 'archive',
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
        path: 'sales',
        component: () => import('@/views/Sales'),
        meta: {
          visible: true,
          name: 'Ventas',
          icon: 'cash-usd-outline'
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
          icon: 'cog',
          category: 'Administracion'
        }
      }
    ]
  },
  {
    path: '/',
    component: Admin,
    redirect: 'dashboardadmininstitute',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboardadmininstitute',
        component: () => import('@/views/DashboardAdminInstitute'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }}
    ]
  },
  {
    path: '/',
    component: Admin,
    redirect: 'dashboardadminmaster',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboardadminmaster',
        component: () => import('@/views/DashboardAdminMaster'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }}
    ]
  },
  {
    path: '/',
    component: Admin,
    redirect: 'dashboardattorney',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboardattorney',
        component: () => import('@/views/DashboardAttorney'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }}
    ]
  },
  {
    path: '/',
    component: Admin,
    redirect: 'dashboardprofessor',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboardprofessor',
        component: () => import('@/views/DashboardProfessor'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }}
    ]
  },
  {
    path: '/',
    component: Admin,
    redirect: 'dashboardstudent',
    meta: {
      visible: true,
      name: 'Inicio',
      icon: 'home'
    },
    children: [
      {
        path: 'dashboardstudent',
        component: () => import('@/views/DashboardStudent'),
        meta: {
          visible: true,
          name: 'Dashboard',
          icon: 'view-dashboard',
          category: 'menu'
        }}
    ]
  },
  {
    path: '/login',
    component: () => import('@/views/Login'),
    meta: {
      visible: false
    }
  },
  {
    path: '/test',
    component: () => import('@/views/Test'),
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
