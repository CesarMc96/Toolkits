package redes.facilitador;

import java.awt.Color;
import java.awt.Dimension;
import java.awt.FlowLayout;
import java.awt.GridBagConstraints;
import java.awt.GridBagLayout;
import java.awt.GridLayout;
import java.awt.Insets;
import javax.swing.BorderFactory;
import javax.swing.GroupLayout;
import javax.swing.JFrame;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;

/** @author César Alejandro Montaño Cortés */

public class PantallaAutomatizar {

    public static void main(String[] args) {
        createWindow();
    }

    private static void createWindow() {
        JFrame framePrincipal = new JFrame("FACILITADOR");
        framePrincipal.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        framePrincipal.setSize(853, 490);
        framePrincipal.setLocationRelativeTo(null);
        framePrincipal.setResizable(false);
        
        //Panel Principal
        JPanel pnlPrincipal = new JPanel();
        pnlPrincipal.setBackground(Color.white);
        
        JLabel lblTituloPrincipal = new JLabel();
        lblTituloPrincipal.setText("FACILITADOR");
        JLabel lblVacio = new JLabel("");
        
        GridBagLayout grid = new GridBagLayout();
        GridBagConstraints gridC = new GridBagConstraints();
        pnlPrincipal.setLayout(grid);
        gridC.fill = GridBagConstraints.BOTH;
        gridC.anchor = GridBagConstraints.NORTH;
        gridC.insets = new Insets(0, 0, 10, 0);
        gridC.gridwidth = GridBagConstraints.REMAINDER;
        
        grid.setConstraints(lblTituloPrincipal, gridC);
        grid.setConstraints(lblVacio, gridC);
        
        pnlPrincipal.add(lblTituloPrincipal);
        pnlPrincipal.add(lblVacio);
        
        //Panel General
        JPanel pnlInformacion = new JPanel();
        pnlInformacion.setBorder(BorderFactory.createLineBorder(Color.black));
        pnlInformacion.setPreferredSize(new Dimension(755, 339));
        pnlInformacion.setBackground(Color.white);
        
        JLabel lblTitulo = new JLabel();
        lblTitulo.setText("Título");
        JTextField txtTitulo = new JTextField();
        txtTitulo.setPreferredSize(new Dimension(400,22));

        pnlInformacion.add(lblTitulo);
        pnlInformacion.add(txtTitulo);
        
        // Panel Horario
        JPanel pnlHorario = new JPanel();
        pnlHorario.setBorder(BorderFactory.createTitledBorder("Horario"));
        pnlHorario.setPreferredSize(new Dimension(277, 123));
        pnlHorario.setBackground(Color.white);

        JLabel lblHora = new JLabel();
        lblHora.setText("Hora");
        JTextField txtHora = new JTextField();
        txtHora.setPreferredSize(new Dimension(64,22));

        JLabel lblMinutos = new JLabel();
        lblMinutos.setText("Minutos");
        JTextField txtMinutos = new JTextField();
        txtMinutos.setPreferredSize(new Dimension(64,22));

        pnlHorario.add(lblHora);
        pnlHorario.add(txtHora);
        pnlHorario.add(lblMinutos);        
        pnlHorario.add(txtMinutos);
        pnlInformacion.add(pnlHorario);

        grid.setConstraints(pnlInformacion, gridC);
         
        /*****/
        /*GridBagLayout grid2 = new GridBagLayout();
        GridBagConstraints gridC2 = new GridBagConstraints();
        pnlInformacion.setLayout(grid2);
        gridC2.fill = GridBagConstraints.BOTH;
        gridC2.weightx = 1.0;
        grid2.setConstraints(lblTitulo, gridC2);
        grid2.setConstraints(txtTitulo, gridC2);
        gridC2.gridwidth = GridBagConstraints.RELATIVE;
        gridC2.weightx = 0.0;
        grid2.setConstraints(pnlHorario, gridC2);*/
        
        

        pnlPrincipal.add(pnlInformacion);
        
        framePrincipal.add(pnlPrincipal);
        framePrincipal.setVisible(true);
    }

    
}
