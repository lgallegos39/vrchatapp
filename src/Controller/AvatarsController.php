<?php

namespace App\Controller;

class AvatarsController extends AppController
{
  public function index()
  {
    $avatars = $this->Avatars->find();
    $this->set(compact('avatars'));
  }

  public function view($id = null)
  {
      $avatar = $this->Avatars->findById($id)->first();
      $this->set(compact('avatar'));
  }

  public function add()
  {
      $avatar = $this->Avatars->newEntity();
      if ($this->request->is('post')) {
          $avatar = $this->Avatars->patchEntity($avatar, $this->request->getData());
          if ($this->Avatars->save($avatar)) {
              $this->Flash->success(__('Your avatar has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add your avatar.'));
      }
      $this->set('avatar', $avatar);
  }

  public function edit($id = null)
  {
      $avatar = $this->Avatars->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Avatars->patchEntity($avatar, $this->request->getData());
          if ($this->Avatars->save($avatar)) {
              $this->Flash->success(__('Your avatar has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update your avatar.'));
      }

      $this->set('name', $name);
  }
}
