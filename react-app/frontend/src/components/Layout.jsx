import React from 'react'
import { Outlet } from 'react-router'
import Header from './Header'
import Footer from './Footer'

const Layout = () => {
  return (
    <>
      <Header />
      <section className='grow p-3'>
        <Outlet />
      </section>
      <Footer />
    </>
  )
}

export default Layout